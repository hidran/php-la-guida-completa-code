<?php

declare(strict_types=1);

class PostRepository
{
    public function __construct(protected readonly PDO $pdo)
    {
    }

    public function findById(int $id): ?Post
    {
        $sql = 'SELECT p.*, u.email FROM posts p '
             . 'INNER JOIN users u ON u.id = p.user_id '
             . 'WHERE p.id = :id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        $row = $stmt->fetch();

        return $row === false ? null : Post::fromRow($row);
    }
}
