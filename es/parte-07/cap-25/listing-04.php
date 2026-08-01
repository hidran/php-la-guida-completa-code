<?php
class Auto
{
    public int $velocidad = 0;

    public function acelerar(int $incremento): void
    {
        $this->velocidad += $incremento;
    }
}

$auto = new Auto();
$auto->acelerar(20);
