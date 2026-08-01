$user = verify_login($pdo, $email, $password);

if (!$user) {
    // credenziali errate: mostriamo l'errore, come nel Capitolo 23
} else {
    // login riuscito: la sessione viene creata come nel Capitolo 23

    if ($remember) {
        save_remember_me($pdo, (int)$user['id']);
    }

    // redirect alla pagina di login, come nel Capitolo 23
}
