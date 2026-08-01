function get_remember_cookie_options(): array
{
    return [
        'expires'  => time() + get_config('remember_me_ttl'),
        'path'     => '/',
        'secure'   => !empty($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Strict',
    ];
}
