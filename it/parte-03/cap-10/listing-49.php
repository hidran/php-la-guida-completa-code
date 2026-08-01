<?php

function somma(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

echo somma(5.5, 4); // 9.5
