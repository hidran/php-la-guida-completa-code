function is_user_logged_in(): bool
{
    return !empty($_SESSION['user_logged_in']);
}

function get_user_login_data(): array
{
    return $_SESSION['user_data'] ?? [];
}

function get_user_role(): string
{
    return get_user_login_data()['role_type'] ?? 'user';
}
