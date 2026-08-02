<?php

public function save(array $post): int
{
    $sql = 'INSERT INTO posts (title, email, message, datecreated)
            VALUES (:title, :email, :message, NOW())';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        'title' => $post['title'],
        'email' => $post['email'],
        'message' => $post['message'],
    ]);

    return $stmt->rowCount();
}
