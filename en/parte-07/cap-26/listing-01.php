<?php
class Animale
{
    public function dorme(): string
    {
        return "zzz";
    }
}

class Cane extends Animale
{
    public function abbaia(): string
    {
        return "bau";
    }
}
