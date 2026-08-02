<?php

declare(strict_types=1);

final class PdoConnection
{
    public function __construct(array $options)
    {
        $defaultOptions = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->pdo = new PDO(
            $options['dsn'],
            $options['user'],
            $options['password'],
            $defaultOptions,
        );
    }
}
