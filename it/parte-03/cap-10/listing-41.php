<?php

declare(strict_types=1);

function sum(...$values)
{
    $somma = 0;

    foreach ($values as $val) {
        $somma += $val;
    }

    return $somma;
}

echo sum(1, 2, 3);       // 6
echo sum(1, 2, 3, 4, 5); // 15
