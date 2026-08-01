<?php

$ar['5'] = 'cinque';   // el string "5" se convierte en la clave ENTERA 5
$ar['5.0'] = 'a';      // "5.0" NO es un entero: se queda como el string "5.0"
$ar['5.2'] = 'b';      // se queda como el string "5.2"
$ar[5.2] = 'c';        // float sin comillas: TRUNCADO a la clave entera 5!
