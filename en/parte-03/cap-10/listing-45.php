<?php

declare(strict_types=1);

function calc(string $operation, int ...$values): float
{
    $result = $values[0];
    $total = count($values);

    for ($i = 1; $i < $total; $i++) {
        switch ($operation) {
            case '+':
                $result += $values[$i];
                break;
            case '-':
                $result -= $values[$i];
                break;
            case '*':
                $result *= $values[$i];
                break;
            case '/':
                if ($values[$i] !== 0) {
                    $result /= $values[$i];
                }
                break;
        }
    }

    return $result;
}

echo calc('*', 3, 4, 5); // 60
echo calc('+', 3, 4, 5); // 12
echo calc('/', 3, 4, 5); // 0.15
