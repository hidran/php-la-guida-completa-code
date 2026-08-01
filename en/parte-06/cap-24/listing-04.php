$user = verify_login($pdo, $email, $password);

if (!$user) {
    // invalid credentials: show the error as in Chapter 23
} else {
    // successful login: create the session as in Chapter 23

    if ($remember) {
        save_remember_me($pdo, (int)$user['id']);
    }

    // redirect to index.php
}
