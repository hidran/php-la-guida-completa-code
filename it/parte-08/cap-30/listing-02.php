<?php
function divide(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException("Divisione per zero");
    }

    return $a / $b;
}
