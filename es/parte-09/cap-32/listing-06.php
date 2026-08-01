<?php
namespace App\Controllers;

class PostController
{
    public function index(): string
    {
        return view("posts/index", [
            "posts" => [],
        ]);
    }

    public function show(int $id): string
    {
        return view("posts/show", [
            "id" => $id,
        ]);
    }
}
