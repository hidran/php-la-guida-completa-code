<?php
use App\Controllers\PostController;

return [
    ["GET", "/", [PostController::class, "index"]],
    ["GET", "/posts/create", [PostController::class, "create"]],
    ["POST", "/posts", [PostController::class, "store"]],
    ["GET", "/posts/{id}", [PostController::class, "show"]],
];
