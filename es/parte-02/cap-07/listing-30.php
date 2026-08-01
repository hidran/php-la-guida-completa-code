<?php

$name = 'Juann';
$bool = true;

echo $name . ' Arias';   // Juann Arias
echo $name . $bool;      // Juann1   (true → '1')

$bool = false;
echo $name . $bool;      // Juann    (false → cadena vacía)
