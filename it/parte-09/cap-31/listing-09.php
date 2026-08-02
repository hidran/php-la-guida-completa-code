<?php

namespace App\Db;

use PDO;

final class DbPdo
{
    private static ?self $instance = null;
    private PDO $conn;

    private function __construct(array $options)
    {
        $this->conn = new PDO($options['dsn'], $options['user'], $options['password']);
    }

    public static function getInstance(array $options): self
    {
        return self::$instance ??= new self($options);
    }

    public function getConn(): PDO
    {
        return $this->conn;
    }
}
