<?php
class Facade
{
    public static function __callStatic(string $name, array $arguments): mixed
    {
        // delegates to a real service
    }
}
