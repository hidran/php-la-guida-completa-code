// index.php
try_auto_login($pdo);

if (!is_user_logged_in()) {
    // redirect alla pagina di login, come nel Capitolo 23
    header('Location: login.php');
    exit;
}
