<?php
class Animal
{
    public function sleeps(): string
    {
        return "zzz";
    }
}

class Dog extends Animal
{
    public function barks(): string
    {
        return "bau";
    }
}
