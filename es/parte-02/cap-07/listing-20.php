<?php

$verify = 'false';   // cadena de 5 caracteres, NO el booleano false
var_dump($verify);   // string(5) "false"

if ($verify) {
    echo 'Entra en la rama true!';   // sí: una cadena no vacía es true
}
