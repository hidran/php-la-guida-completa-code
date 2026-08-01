function clear_remember_me(): void
{
    $cookie_name = get_config('remember_me_cookie_name');

    $cookie_options            = get_remember_cookie_options();
    $cookie_options['expires'] = time() - 3600; // one hour in the past

    setcookie($cookie_name, '', $cookie_options);
}
