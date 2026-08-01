<?php
echo json_encode([
    "success" => false,
    "errors" => [
        "email" => "Email no válida",
        "password" => "Password obbligatoria",
    ],
]);
