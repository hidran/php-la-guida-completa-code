$from_all = (int)($_POST['from_all'] ?? 0);

if ($from_all) {
    revoke_all_remember_me_tokens($pdo, get_user_id());
} else {
    revoke_device_remember_me_token($pdo, get_user_id());
}
