<?php
$stmt = $this->pdo->prepare(
    "INSERT INTO posts (user_id, title, body) VALUES (:user_id, :title, :body)"
);

$stmt->execute([
    "user_id" => auth_id(),
    "title" => $title,
    "body" => $body,
]);
