<?php
$numbers = [1, 2, 3, 4, 5, 6];

$even = array_filter($numbers, fn (int $n): bool => $n % 2 === 0);
