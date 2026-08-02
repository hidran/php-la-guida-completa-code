<?php

public function show(int $postId): void
{
    $post = $this->post->findByPostId($postId);
    $commentModel = new Comment($this->conn);
    $comments = $commentModel->all($postId);

    $this->content = view('post', compact('post', 'comments'));
}

public function saveComment(int $postId): void
{
    $commentModel = new Comment($this->conn);
    $commentModel->save([
        'post_id' => $postId,
        'email' => $_POST['email'] ?? '',
        'comment' => $_POST['comment'] ?? '',
    ]);

    redirect('/posts/' . $postId);
}
