<?php
class Usuario
{
    private string $email;

    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email no válida");
        }

        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
