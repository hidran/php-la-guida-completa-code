<?php
header("Content-Type: application/json");

$users = [
    ["id" => 1, "name" => "John"],
    ["id" => 2, "name" => "Lucy"],
];

echo json_encode([
    "data" => $users,
    "count" => count($users),
], JSON_UNESCAPED_UNICODE);
