<?php
class Role
{
    public const ADMIN = "admin";
    public const USER = "user";
}

if ($role === Role::ADMIN) {
    echo "Acceso al panel de administración";
}
