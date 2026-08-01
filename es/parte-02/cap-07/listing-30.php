<?php

$name = 'Juan';
$bool = true;

echo $name . ' Arias';   // Juan Arias
echo $name . $bool;      // Juan1   (true → '1')

$bool = false;
echo $name . $bool;      // Juan    (false → cadena vacía)
