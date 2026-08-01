<?php
$config = require __DIR__ . "/config.php";
$db = $config["db"];

try {
    $pdo = new PDO(
        $db["dsn"],
        $db["user"],
        $db["password"],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit("Error interno");
}
