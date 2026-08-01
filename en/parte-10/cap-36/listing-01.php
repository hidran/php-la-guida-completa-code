<?php
namespace App\Controllers\Api;

class PostController
{
    public function index(): string
    {
        header("Content-Type: application/json");

        return json_encode([
            "data" => $this->posts->all(),
        ], JSON_UNESCAPED_UNICODE);
    }
}
