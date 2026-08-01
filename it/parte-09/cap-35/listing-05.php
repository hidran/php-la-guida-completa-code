<?php
if (!$user || !password_verify($password, $user["password"])) {
    return render("auth/login", [
        "error" => "Credenziali non valide",
    ]);
}
