<?php
class Facade
{
    public static function __callStatic(string $name, array $arguments): mixed
    {
        // delega en un servicio real
    }
}
