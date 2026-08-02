<?php

declare(strict_types=1);

$dsn = sprintf(
    '%s:host=%s;port=%d;dbname=%s;charset=utf8mb4',
    $driver,
    $host,
    $port,
    $database,
);
