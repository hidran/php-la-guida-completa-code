<?php
$withVat = array_map(fn (int $price): float => $price * 1.22, $prices);
