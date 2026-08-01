<?php
$email = $data["email"] ?? "";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(["error" => "Email no válida"]);
    exit;
}
