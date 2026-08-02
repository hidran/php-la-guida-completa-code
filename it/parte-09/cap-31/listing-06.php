<?php

namespace App\Controllers;

final class PostController extends BaseController
{
    public function getPosts(): void
    {
        $this->content = 'Post list';
    }

    public function show(int $postId): void
    {
        $this->content = 'Post detail: ' . $postId;
    }
}
