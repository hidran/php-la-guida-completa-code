<?php

namespace App\Controllers;

final class PostController extends BaseController
{
    public function getPosts(): void
    {
        $this->content = 'Elenco post';
    }

    public function show(int $postId): void
    {
        $this->content = 'Dettaglio post: ' . $postId;
    }
}
