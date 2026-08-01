<?php
class Proxy
{
    public function __call(string $name, array $arguments): mixed
    {
        throw new BadMethodCallException("Método $name no encontrado");
    }
}
