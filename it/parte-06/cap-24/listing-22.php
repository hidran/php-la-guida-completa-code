$userAgent = mb_substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 250);

$sql = "INSERT INTO remember_tokens
            (user_id, token_hash, selector, expires_at, ip, user_agent)
        VALUES (:user_id, :token_hash, :selector, :expires_at, :ip, :user_agent)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'user_id'    => $userId,
    'token_hash' => $tokenHash,
    'selector'   => $selector,
    'expires_at' => $expiresAt,
    'ip'         => $ip,
    'user_agent' => $userAgent,
]);
