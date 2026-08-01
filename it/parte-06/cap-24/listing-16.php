function rotate_remember_token(PDO $pdo, int $id): void
{
    $token     = base64_url_encode(random_bytes(33));
    $tokenHash = hash('sha256', $token);

    $ttl       = get_config('remember_me_ttl');
    $expiresAt = (new DateTimeImmutable('+' . $ttl . ' seconds'))
        ->format('Y-m-d H:i:s');

    // ci serve solo il selector, per ricostruire il valore del cookie
    $stmt = $pdo->prepare("SELECT selector FROM remember_tokens WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch();

    if (!$row) {
        return;
    }

    $selector = $row['selector'];

    // aggiorniamo hash e scadenza del token esistente
    $stmt = $pdo->prepare(
        "UPDATE remember_tokens
         SET token_hash = :token_hash, expires_at = :expires_at
         WHERE id = :id"
    );

    $stmt->execute([
        'token_hash' => $tokenHash,
        'expires_at' => $expiresAt,
        'id'         => $id,
    ]);

    // e inviamo il nuovo cookie
    $newToken = $selector . ':' . $token;
    setcookie(get_config('remember_me_cookie_name'), $newToken, get_remember_cookie_options());
}
