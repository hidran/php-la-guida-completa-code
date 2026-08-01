function save_remember_me(PDO $pdo, int $userId): bool
{
    $selector   = base64_url_encode(random_bytes(12));
    $token      = base64_url_encode(random_bytes(33));
    $tokenHash  = hash('sha256', $token);

    $ttl       = get_config('remember_me_ttl');
    $expiresAt = (new DateTimeImmutable('+' . $ttl . ' seconds'))
        ->format('Y-m-d H:i:s');

    $ip = inet_pton($_SERVER['REMOTE_ADDR'] ?? '') ?: null;

    $sql = "INSERT INTO remember_tokens (user_id, token_hash, selector, expires_at, ip)
            VALUES (:user_id, :token_hash, :selector, :expires_at, :ip)";

    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute([
        'user_id'    => $userId,
        'token_hash' => $tokenHash,
        'selector'   => $selector,
        'expires_at' => $expiresAt,
        'ip'         => $ip,
    ]);

    return $res;
}
