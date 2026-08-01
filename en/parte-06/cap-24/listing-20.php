function get_remember_me_cookie_selector(): string
{
    $cookie_name = get_config('remember_me_cookie_name');
    $cookie      = $_COOKIE[$cookie_name] ?? '';

    if ($cookie === '' || !str_contains($cookie, ':')) {
        return '';
    }

    [$selector] = explode(':', $cookie);

    return $selector;
}
