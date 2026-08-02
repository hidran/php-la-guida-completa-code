function tryAutoLogin(): void
{
    if (!empty($_SESSION['user_logged_in'])) {
        return;
    }
    $cookieName = getConfig('rememberMeCookieName');

    $cookie = $_COOKIE[$cookieName] ?? '';

    if (!$cookie || !str_contains($cookie, ':')) {
        return;
    }
    [$selector, $token] = explode(':', $cookie);
