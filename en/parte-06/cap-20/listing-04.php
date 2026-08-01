<?php
$id = (int) ($_GET["id"] ?? 0);

$stmt = $pdo->prepare(
    "UPDATE users
     SET first_name = :first_name, email = :email, updated_at = NOW()
     WHERE id = :id"
);

$stmt->execute([
    "first_name" => $firstName,
    "email" => $email,
    "id" => $id,
]);
