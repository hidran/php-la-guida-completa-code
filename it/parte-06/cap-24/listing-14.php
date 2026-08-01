function delete_remember_token_by_id(PDO $pdo, int $id): void
{
    $stmt = $pdo->prepare("DELETE FROM remember_tokens WHERE id = :id");
    $stmt->execute(['id' => $id]);
}
