<?php

$name = 'Hidran';
$bool = true;

echo $name . ' Arias';   // Hidran Arias
echo $name . $bool;      // Hidran1   (true → '1')

$bool = false;
echo $name . $bool;      // Hidran    (false → stringa vuota)
