<?php

namespace App\Models;

use PDO;

final class Comment
{
    public function __construct(private readonly PDO $conn)
    {
    }

    public function all(int $postId): array
    {
        $sql = 'SELECT * FROM postscomments
                WHERE post_id = :post_id
                ORDER BY datecreated DESC';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['post_id' => $postId]);

        return $stmt->fetchAll();
    }

    public function save(array $comment): int
    {
        $sql = 'INSERT INTO postscomments (post_id, email, comment, datecreated)
                VALUES (:post_id, :email, :comment, NOW())';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($comment);

        return $stmt->rowCount();
    }
}
