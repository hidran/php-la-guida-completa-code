<?php

$name = 'Juan';
$address = 'Calle Mayor';

$lastName = "$name Arias";
echo $lastName;          // Juan Arias

echo 'Nombre: $name';      // Nombre: $name  (sin parsing!)
echo "Nombre: $name";      // Nombre: Juan
