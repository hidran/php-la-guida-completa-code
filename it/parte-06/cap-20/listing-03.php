<?php
$stmt = $pdo->prepare(
    "INSERT INTO users (first_name, email) VALUES (:first_name, :email)"
);

$stmt->execute([
    "first_name" => $firstName,
    "email" => $email,
]);
