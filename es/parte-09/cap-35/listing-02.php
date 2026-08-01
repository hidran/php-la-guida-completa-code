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
        // verifica credenciales
    }

    public function destroy(): void
    {
        // logout
    }
}
