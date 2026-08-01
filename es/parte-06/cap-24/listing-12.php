// index.php
try_auto_login($pdo);

if (!is_user_logged_in()) {
    // redirect a la página de login como en el Capítulo 23
    header('Location: login.php');
    exit;
}
