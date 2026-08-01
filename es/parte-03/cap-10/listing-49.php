<?php

function suma(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

echo suma(5.5, 4); // 9.5
