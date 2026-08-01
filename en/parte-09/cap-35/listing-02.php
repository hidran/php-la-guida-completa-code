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
        // verify credentials
    }

    public function destroy(): void
    {
        // logout
    }
}
