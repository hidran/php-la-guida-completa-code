<?php
declare(strict_types=1);

$stmt = $pdo->prepare(
    'SELECT id, first_name, email FROM users WHERE email = :email',
);

$stmt->execute(['email' => $email]);

$user = $stmt->fetch();
