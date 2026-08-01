<?php
function divide(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException("División por cero");
    }

    return $a / $b;
}
