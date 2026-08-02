clearRememberMe();
if ($fromAll) {
    revokeAllRememberMeTokens(get_user_id());
} else {
    revokeDeviceRememberMeToken(get_user_id());
}
$_SESSION = [];
