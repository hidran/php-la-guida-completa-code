<?php
namespace App\Controllers;

use App\Models\Post;

class PostController
{
    public function index(): string
    {
        $posts = (new Post())->all();

        return view("posts/index", ["posts" => $posts]);
    }
}
