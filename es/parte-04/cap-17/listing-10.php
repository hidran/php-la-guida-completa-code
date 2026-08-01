<?php
header("Content-Type: application/json");

$users = [
    ["id" => 1, "name" => "Juan"],
    ["id" => 2, "name" => "Lucía"],
];

echo json_encode([
    "data" => $users,
    "count" => count($users),
], JSON_UNESCAPED_UNICODE);
