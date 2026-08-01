<?php
public function create(string $title, string $body): int
{
    $stmt = $this->pdo->prepare(
        "INSERT INTO posts (title, body) VALUES (:title, :body)"
    );

    $stmt->execute([
        "title" => $title,
        "body" => $body,
    ]);

    return (int) $this->pdo->lastInsertId();
}
