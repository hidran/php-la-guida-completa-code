<?php
public function update(int $id): void
{
    $stmt = $this->pdo->prepare(
        "UPDATE posts SET title = :title, body = :body WHERE id = :id"
    );

    $stmt->execute([
        "title" => $title,
        "body" => $body,
        "id" => $id,
    ]);
}
