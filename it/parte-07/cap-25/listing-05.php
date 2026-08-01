<?php
class Conto
{
    private float $saldo = 0;

    public function deposita(float $importo): void
    {
        if ($importo <= 0) {
            return;
        }

        $this->saldo += $importo;
    }

    public function saldo(): float
    {
        return $this->saldo;
    }
}
