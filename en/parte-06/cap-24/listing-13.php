function try_auto_login(PDO $pdo): void
{
    // if the session already exists, there is nothing to do
    if (!empty($_SESSION['user_login'])) {
        return;
    }

    $cookieName = get_config('remember_me_cookie_name');
    $cookie     = $_COOKIE[$cookieName] ?? '';

    if ($cookie === '' || !str_contains($cookie, ':')) {
        return; // no cookie, or a cookie that fails our validation
    }

    [$selector, $token] = explode(':', $cookie, 2);

    $sql = "SELECT t.id AS token_id, t.expires_at, t.token_hash,
                   u.id, u.email, u.username, u.role_type
            FROM remember_tokens AS t
            INNER JOIN users AS u ON t.user_id = u.id
            WHERE t.selector = :selector";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['selector' => $selector]);
    $row = $stmt->fetch();

    if (!$row) {
        // the selector no longer exists in the database: the cookie is worthless
        clear_remember_me();
        return;
    }

    // has the token expired?
    if (new DateTimeImmutable($row['expires_at']) < new DateTimeImmutable('now')) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // does the received token hash match the stored hash?
    if (!hash_equals($row['token_hash'], hash('sha256', $token))) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // everything is OK: recreate the session
    session_regenerate_id(true);

    $_SESSION['user_login'] = true;
    $_SESSION['user_data']  = [
        'id'        => $row['id'],
        'email'     => $row['email'],
        'username'  => $row['username'],
        'role_type' => $row['role_type'],
    ];

    // token rotation: we implement it in the next section
    rotate_remember_token($pdo, (int)$row['token_id']);
}
