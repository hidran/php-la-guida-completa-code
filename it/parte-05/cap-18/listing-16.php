<?php
declare(strict_types=1);

$pdo = new PDO(
    'mysql:host=localhost;dbname=php_guida;charset=utf8mb4',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
);

$stmt = $pdo->query('SELECT id, first_name, email FROM users');

foreach ($stmt as $user) {
    echo htmlspecialchars($user['first_name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
        . ' - '
        . htmlspecialchars($user['email'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
        . '<br>';
}
