<?php

public function show(int $postid): void
{
    $post = $this->post->findByPostId($postid);
    $comment = new Comment($this->conn);
    $comments = $comment->all($postid);

    $this->content = view('post', compact('post', 'comments'));
}
