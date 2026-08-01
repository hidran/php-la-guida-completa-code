<?php
class Animal
{
    public function duerme(): string
    {
        return "zzz";
    }
}

class Perro extends Animal
{
    public function ladra(): string
    {
        return "bau";
    }
}
