<?php

declare(strict_types=1);

function sum(...$values)
{
    $sum = 0;

    foreach ($values as $val) {
        $sum += $val;
    }

    return $sum;
}

echo sum(1, 2, 3);       // 6
echo sum(1, 2, 3, 4, 5); // 15
