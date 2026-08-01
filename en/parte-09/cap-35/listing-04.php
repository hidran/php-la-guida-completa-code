<?php
class User
{
    public function findByEmail(string $email): ?array
    {
        $stmt = $this->pdo->prepare("SELECT id, name, email, password FROM users WHERE email = :email");
        $stmt->execute(["email" => $email]);

        $user = $stmt->fetch();

        return $user ?: null;
    }
}
