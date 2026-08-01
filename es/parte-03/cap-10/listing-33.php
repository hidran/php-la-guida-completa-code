<?php

$numbers = [1, 2, 3, 4, 5];
$doubleArray = [];

foreach ($numbers as $val) {
    $doubleArray[] = $val * 2;
}

print_r($doubleArray);
// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
