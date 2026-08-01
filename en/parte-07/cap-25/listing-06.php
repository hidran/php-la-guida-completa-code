<?php
class User
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}

$user = new User("john@example.com");
