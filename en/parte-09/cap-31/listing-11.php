<?php

namespace App\Models;

use PDO;

final class Post
{
    public function __construct(private readonly PDO $conn)
    {
    }

    public function all(): array
    {
        $sql = 'SELECT * FROM posts ORDER BY datecreated DESC';
        $stmt = $this->conn->query($sql);

        return $stmt ? $stmt->fetchAll() : [];
    }
}
