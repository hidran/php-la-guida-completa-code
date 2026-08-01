function get_user_id(): int
{
    $id = $_SESSION['user_data']['id'] ?? 0;

    return (int)$id;
}
