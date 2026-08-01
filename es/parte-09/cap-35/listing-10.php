<?php
$stmt = $this->pdo->prepare(
    "INSERT INTO post_comments (post_id, user_id, body)
     VALUES (:post_id, :user_id, :body)"
);
