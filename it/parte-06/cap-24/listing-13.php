function try_auto_login(PDO $pdo): void
{
    // se la sessione esiste già, non serve fare nulla
    if (!empty($_SESSION['user_login'])) {
        return;
    }

    $cookieName = get_config('remember_me_cookie_name');
    $cookie     = $_COOKIE[$cookieName] ?? '';

    if ($cookie === '' || !str_contains($cookie, ':')) {
        return; // nessun cookie, o cookie non valido per la nostra verifica
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
        // il selector non esiste più nel database: il cookie non vale nulla
        clear_remember_me();
        return;
    }

    // il token è scaduto?
    if (new DateTimeImmutable($row['expires_at']) < new DateTimeImmutable('now')) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // l'hash del token ricevuto coincide con quello salvato?
    if (!hash_equals($row['token_hash'], hash('sha256', $token))) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // tutto ok: ricreiamo la sessione
    session_regenerate_id(true);

    $_SESSION['user_login'] = true;
    $_SESSION['user_data']  = [
        'id'        => $row['id'],
        'email'     => $row['email'],
        'username'  => $row['username'],
        'role_type' => $row['role_type'],
    ];

    // rotazione del token: la implementiamo nel prossimo paragrafo
    rotate_remember_token($pdo, (int)$row['token_id']);
}
