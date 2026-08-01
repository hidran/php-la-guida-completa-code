<?php
public function addComment(int $postId, string $body): void
{
    $stmt = $this->pdo->prepare(
        "INSERT INTO post_comments (post_id, body) VALUES (:post_id, :body)"
    );

    $stmt->execute([
        "post_id" => $postId,
        "body" => $body,
    ]);
}
