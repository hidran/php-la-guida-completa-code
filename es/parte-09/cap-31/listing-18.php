<?php

public function findByPostId(int $postId): object|false
{
    $sql = 'SELECT * FROM posts WHERE id = :id';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $postId]);

    return $stmt->fetch();
}
