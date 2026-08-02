function saveRememberMe(mysqli $conn, int $userId): bool
{
    $selector = base64url_encode(random_bytes(12));
    $token = base64url_encode(random_bytes(33));
    $tokenHash = hash('sha256', $token);
    $ttl = getConfig('rememberMeTTL');
    $expiresAt = (new DateTimeImmutable('+' . $ttl . ' seconds'))->format('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $userAgent = mb_substr($_SERVER['HTTP_USER_AGENT'], 0, 255);
    $sql = 'INSERT INTO remember_tokens (user_id, token_hash, selector, expires_at, ip_address, user_agent) VALUES (?,?,?,?,?,?)';
