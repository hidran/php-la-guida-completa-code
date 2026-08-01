<?php
$stmt = $pdo->prepare(
    "SELECT id, email, password, role_type
     FROM users
     WHERE email = :email"
);

$stmt->execute(["email" => $email]);
$user = $stmt->fetch();
