function clear_remember_me(): void
{
    $cookie_name = get_config('remember_me_cookie_name');

    $cookie_options            = get_remember_cookie_options();
    $cookie_options['expires'] = time() - 3600; // una hora en el pasado

    setcookie($cookie_name, '', $cookie_options);
}
