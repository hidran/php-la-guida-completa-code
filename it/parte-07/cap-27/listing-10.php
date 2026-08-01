<?php
class Data
{
    private array $values = [];

    public function __get(string $name): mixed
    {
        return $this->values[$name] ?? null;
    }
}
