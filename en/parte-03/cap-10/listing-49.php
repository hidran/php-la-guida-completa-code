<?php

function sum(int|float $a, int|float $b): int|float
{
    return $a + $b;
}

echo sum(5.5, 4); // 9.5
