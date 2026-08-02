function revokeAllRememberMeTokens(int $userId): void
{
    $conn = getConnection();
    $st = $conn->prepare('DELETE FROM remember_tokens WHERE user_id=?');
    $st->bind_param('i', $userId);
    $st->execute();
    $st->close();
}
