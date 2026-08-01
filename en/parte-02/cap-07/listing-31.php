<?php

$name = 'John';
$lastName = 'Arias';
$address = 'Main Street';

$data = <<<EOD
My name is $name <br>
My last name is $lastName <br>
My address is $address
EOD;

echo $data;
