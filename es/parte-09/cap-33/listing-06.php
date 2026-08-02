<?php

declare(strict_types=1);

public function verifyLogin(
    string $email,
    string $password,
    string $token,
    string $sessionToken
): AuthResult {
    if (!hash_equals($sessionToken, $token)) {
        return AuthResult::failure('TOKEN MISMATCH');
    }

    $user = $this->users->findByEmail($email);

    if ($user === null || !password_verify($password, $user->password)) {
        return AuthResult::failure('WRONG PASSWORD');
    }

    return AuthResult::success('LOGGED IN', $user);
}
