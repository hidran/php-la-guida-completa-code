<?php
if (!$user || !password_verify($password, $user["password"])) {
    $errors["login"] = "Credenciales no válidas";
}
