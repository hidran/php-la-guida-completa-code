<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Post
{
    public function all(): array
    {
        $stmt = Database::connection()->query(
            "SELECT id, user_id, title, body, created_at FROM posts ORDER BY created_at DESC"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
