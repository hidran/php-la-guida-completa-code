<?php
echo json_encode([
    "success" => false,
    "errors" => [
        "email" => "Email non valida",
        "password" => "Password obbligatoria",
    ],
]);
