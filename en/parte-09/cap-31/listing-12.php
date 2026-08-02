<?php

namespace App\Controllers;

use App\Models\Post;
use PDO;

final class PostController extends BaseController
{
    private Post $post;

    public function __construct(private readonly PDO $conn)
    {
        $this->post = new Post($conn);
    }

    public function getPosts(): void
    {
        $posts = $this->post->all();
        $this->content = view('posts', compact('posts'), $this->tplDir);
    }
}
