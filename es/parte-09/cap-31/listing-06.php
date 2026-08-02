<?php

namespace App\Controllers;

final class PostController extends BaseController
{
    public function getPosts(): void
    {
        $this->content = 'Lista de posts';
    }

    public function show(int $postId): void
    {
        $this->content = 'Detalle del post: ' . $postId;
    }
}
