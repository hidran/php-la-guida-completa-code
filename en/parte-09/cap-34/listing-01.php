<?php

declare(strict_types=1);

final class AuthService
{
    public function __construct(private readonly UserRepositoryInterface $users)
    {
    }

    public function verifySignup(
        string $email,
        string $password,
        string $token,
        string $sessionToken
    ): AuthResult {
        if (!hash_equals($sessionToken, $token)) {
            return AuthResult::failure('TOKEN MISMATCH');
        }

        if ($this->users->findByEmail($email) !== null) {
            return AuthResult::failure('USER ALREADY EXISTS');
        }

        return AuthResult::success('SIGNUP OK');
    }
}
