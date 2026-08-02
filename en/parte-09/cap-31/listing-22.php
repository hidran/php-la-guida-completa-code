<?php

public function update(array $post, int $postId): int
{
    $sql = 'UPDATE posts SET title = :title, email = :email, message = :message
            WHERE id = :id';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'title' => $post['title'],
        'email' => $post['email'],
        'message' => $post['message'],
        'id' => $postId,
    ]);

    return $stmt->rowCount();
}
