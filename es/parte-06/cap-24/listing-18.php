function revoke_all_remember_me_tokens(PDO $pdo, int $userId): void
{
    $stmt = $pdo->prepare("DELETE FROM remember_tokens WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $userId]);
}
