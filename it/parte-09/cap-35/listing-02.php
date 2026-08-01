<?php
namespace App\Controllers;

class LoginController
{
    public function create(): string
    {
        return render("auth/login");
    }

    public function store(): string
    {
        // verifica credenziali
    }

    public function destroy(): void
    {
        // logout
    }
}
