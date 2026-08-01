<?php
echo json_encode([
    "success" => false,
    "errors" => [
        "email" => "Invalid email",
        "password" => "Password obbligatoria",
    ],
]);
