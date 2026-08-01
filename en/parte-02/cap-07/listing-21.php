<?php

$name = 'John';
$address = 'Main Street';

$lastName = "$name Arias";
echo $lastName;          // John Arias

echo 'First name: $name';      // First name: $name  (no parsing!)
echo "First name: $name";      // First name: John
