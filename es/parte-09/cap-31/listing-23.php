<?php

public function delete(int $postId): int
{
    $stmt = $this->conn->prepare('DELETE FROM posts WHERE id = :id');
    $stmt->bindValue('id', $postId, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->rowCount();
}
