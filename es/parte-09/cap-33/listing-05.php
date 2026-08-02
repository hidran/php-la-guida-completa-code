<?php

declare(strict_types=1);

public function save(array $data): int
{
    $sql = 'INSERT INTO posts (title, user_id, message, datecreated) '
         . 'VALUES (:title, :user_id, :message, NOW())';

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'title' => $data['title'],
        'user_id' => $data['user_id'],
        'message' => $data['message'],
    ]);

    return (int) $this->pdo->lastInsertId();
}
