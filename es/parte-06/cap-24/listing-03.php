$value = $selector . ':' . $token;
$cookieName = getConfig('rememberMeCookieName');

$cookieOptions = getRememberCookieOpts();
setcookie($cookieName, $value, $cookieOptions);

return $res;
