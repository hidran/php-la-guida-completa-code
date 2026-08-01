<?php

$name = 'John';
$bool = true;

echo $name . ' Arias';   // John Arias
echo $name . $bool;      // John1   (true → '1')

$bool = false;
echo $name . $bool;      // John    (false → empty string)
