<?php

$name = 'Johnn';
$bool = true;

echo $name . ' Arias';   // Johnn Arias
echo $name . $bool;      // Johnn1   (true → '1')

$bool = false;
echo $name . $bool;      // Johnn    (false → empty string)
