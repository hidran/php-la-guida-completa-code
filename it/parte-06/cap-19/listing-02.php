<?php
return [
    "db" => [
        "dsn" => getenv("DB_DSN") ?: "mysql:host=localhost;dbname=php_guida;charset=utf8mb4",
        "user" => getenv("DB_USER") ?: "root",
        "password" => getenv("DB_PASSWORD") ?: "",
    ],
];
