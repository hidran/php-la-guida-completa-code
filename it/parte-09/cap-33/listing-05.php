<?php
public function find(int $id): ?array
{
    $stmt = Database::connection()->prepare(
        "SELECT id, user_id, title, body, created_at FROM posts WHERE id = :id"
    );

    $stmt->execute(["id" => $id]);

    $post = $stmt->fetch();

    return $post ?: null;
}
