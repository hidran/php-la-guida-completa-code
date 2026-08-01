<?php
$search = trim($_GET["search"] ?? "");

$sql = "SELECT id, first_name, last_name, email
        FROM users
        WHERE first_name LIKE :first_name
           OR last_name LIKE :last_name
           OR email LIKE :email";

$like = "%" . $search . "%";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    "first_name" => $like,
    "last_name" => $like,
    "email" => $like,
]);
