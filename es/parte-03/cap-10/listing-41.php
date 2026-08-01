<?php

declare(strict_types=1);

function sum(...$values)
{
    $suma = 0;

    foreach ($values as $val) {
        $suma += $val;
    }

    return $suma;
}

echo sum(1, 2, 3);       // 6
echo sum(1, 2, 3, 4, 5); // 15
