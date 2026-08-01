<?php
header("Content-Type: application/json");

$users = [
    ["id" => 1, "name" => "Mario"],
    ["id" => 2, "name" => "Lucia"],
];

echo json_encode([
    "data" => $users,
    "count" => count($users),
], JSON_UNESCAPED_UNICODE);
