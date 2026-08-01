function rotate_remember_token(PDO $pdo, int $id): void
{
    $token     = base64_url_encode(random_bytes(33));
    $tokenHash = hash('sha256', $token);

    $ttl       = get_config('remember_me_ttl');
    $expiresAt = (new DateTimeImmutable('+' . $ttl . ' seconds'))
        ->format('Y-m-d H:i:s');

    // solo necesitamos el selector para reconstruir el valor del cookie
    $stmt = $pdo->prepare("SELECT selector FROM remember_tokens WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch();

    if (!$row) {
        return;
    }

    $selector = $row['selector'];

    // actualizamos hash y caducidad del token existente
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

    // enviamos el nuevo cookie
    $newToken = $selector . ':' . $token;
    setcookie(get_config('remember_me_cookie_name'), $newToken, get_remember_cookie_options());
}
