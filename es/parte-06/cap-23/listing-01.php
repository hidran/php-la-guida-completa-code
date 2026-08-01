<?php
session_start();
header("Content-Type: application/json");

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

// busca el usuario y verifica la password

if (!$user || !password_verify($password, $user["password"])) {
    http_response_code(422);
    echo json_encode([
        "success" => false,
        "message" => "Credenciales no válidas",
    ]);
    exit;
}

session_regenerate_id(true);
$_SESSION["user_id"] = (int) $user["id"];
$_SESSION["role_type"] = $user["role_type"];

echo json_encode([
    "success" => true,
    "redirect" => "index.php",
]);
