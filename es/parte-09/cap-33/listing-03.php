<?php
class ConnectionFactory
{
    public static function make(array $config): PDO
    {
        return new PDO($config["dsn"], $config["user"], $config["password"]);
    }
}
