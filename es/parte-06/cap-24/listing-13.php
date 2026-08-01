function try_auto_login(PDO $pdo): void
{
    // si la sesión ya existe, no hace falta hacer nada
    if (!empty($_SESSION['user_login'])) {
        return;
    }

    $cookieName = get_config('remember_me_cookie_name');
    $cookie     = $_COOKIE[$cookieName] ?? '';

    if ($cookie === '' || !str_contains($cookie, ':')) {
        return; // sin cookie, o cookie que no supera nuestra verificación
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
        // el selector ya no existe en el database: el cookie no vale nada
        clear_remember_me();
        return;
    }

    // el token caducó?
    if (new DateTimeImmutable($row['expires_at']) < new DateTimeImmutable('now')) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // el hash del token recibido coincide con el hash guardado?
    if (!hash_equals($row['token_hash'], hash('sha256', $token))) {
        delete_remember_token_by_id($pdo, (int)$row['token_id']);
        clear_remember_me();
        return;
    }

    // todo correcto: recreamos la sesión
    session_regenerate_id(true);

    $_SESSION['user_login'] = true;
    $_SESSION['user_data']  = [
        'id'        => $row['id'],
        'email'     => $row['email'],
        'username'  => $row['username'],
        'role_type' => $row['role_type'],
    ];

    // rotación del token: la implementamos en la próxima sección
    rotate_remember_token($pdo, (int)$row['token_id']);
}
