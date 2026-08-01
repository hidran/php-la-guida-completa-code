<?php
$stmt = $pdo->prepare(
    "SELECT id, first_name, last_name, email, role_type
     FROM users
     WHERE id = :id"
);

$stmt->execute(["id" => $id]);
$user = $stmt->fetch();
