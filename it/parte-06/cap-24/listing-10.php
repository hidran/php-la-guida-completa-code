    // ...prepare ed execute come prima...

    if (!$res) {
        return false;
    }

    $value = $selector . ':' . $token;
    setcookie(get_config('remember_me_cookie_name'), $value, get_remember_cookie_options());

    return true;
}
