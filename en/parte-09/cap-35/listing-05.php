<?php
if (!$user || !password_verify($password, $user["password"])) {
    return render("auth/login", [
        "error" => "Invalid credentials",
    ]);
}
