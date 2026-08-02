function getRememberCookieOpts(): array
{
    $ttl = getConfig('rememberMeTTL');
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

    return [

        'expires' => time() + $ttl,
        'path' => '/',
        'domain' => '',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Strict'
    ];
}
