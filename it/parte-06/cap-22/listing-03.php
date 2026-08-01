<?php
$stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
$stmt->execute(["email" => $email]);

if ($stmt->fetch()) {
    $errors["email"] = "Email già registrata";
}
