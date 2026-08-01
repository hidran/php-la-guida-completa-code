<?php
class Facade
{
    public static function __callStatic(string $name, array $arguments): mixed
    {
        // delega a un servizio reale
    }
}
