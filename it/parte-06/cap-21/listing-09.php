<?php
$stmt = $pdo->prepare(
    "UPDATE users SET avatar = :avatar WHERE id = :id"
);

$stmt->execute([
    "avatar" => $avatarPath,
    "id" => $id,
]);
