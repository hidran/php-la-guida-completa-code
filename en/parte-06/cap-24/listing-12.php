// index.php
try_auto_login($pdo);

if (!is_user_logged_in()) {
    // redirect to the login page as in Chapter 23
    header('Location: login.php');
    exit;
}
