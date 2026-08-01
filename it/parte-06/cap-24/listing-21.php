function revoke_device_remember_me_token(PDO $pdo, int $userId): void
{
    $selector = get_remember_me_cookie_selector();

    if ($selector === '') {
        return;
    }

    $stmt = $pdo->prepare(
        "DELETE FROM remember_tokens WHERE user_id = :user_id AND selector = :selector"
    );

    $stmt->execute([
        'user_id'  => $userId,
        'selector' => $selector,
    ]);
}
