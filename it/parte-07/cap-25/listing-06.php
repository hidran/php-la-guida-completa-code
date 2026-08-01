<?php
class Utente
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}

$utente = new Utente("mario@example.com");
