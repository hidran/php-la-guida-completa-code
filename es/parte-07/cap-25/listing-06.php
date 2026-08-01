<?php
class Usuario
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}

$usuario = new Usuario("mario@example.com");
