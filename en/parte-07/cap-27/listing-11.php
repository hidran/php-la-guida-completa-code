<?php
class Proxy
{
    public function __call(string $name, array $arguments): mixed
    {
        throw new BadMethodCallException("Metodo $name non trovato");
    }
}
