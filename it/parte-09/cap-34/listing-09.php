<?php
public function comments(int $postId): array
{
    $stmt = $this->pdo->prepare(
        "SELECT id, post_id, body, created_at FROM post_comments WHERE post_id = :post_id ORDER BY created_at ASC"
    );

    $stmt->execute(["post_id" => $postId]);

    return $stmt->fetchAll();
}
