$user = verify_login($pdo, $email, $password);

if (!$user) {
    // credenciales incorrectas: mostramos el error como en el Capítulo 23
} else {
    // login correcto: se crea la sesión como en el Capítulo 23

    if ($remember) {
        save_remember_me($pdo, (int)$user['id']);
    }

    // redirect a index.php
}
