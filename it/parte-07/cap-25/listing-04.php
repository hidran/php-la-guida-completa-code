<?php
class Auto
{
    public int $velocita = 0;

    public function accelera(int $incremento): void
    {
        $this->velocita += $incremento;
    }
}

$auto = new Auto();
$auto->accelera(20);
