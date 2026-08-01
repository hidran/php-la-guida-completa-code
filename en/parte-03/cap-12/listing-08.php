<?php
$prices = [10, 20, 30];

$withVat = array_map(function (int $price): float {
    return $price * 1.22;
}, $prices);
