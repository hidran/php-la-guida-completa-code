<?php

$verify = 'false';   // stringa di 5 caratteri, NON il boolean false
var_dump($verify);   // string(5) "false"

if ($verify) {
    echo 'Passa dal ramo true!';   // sì: una stringa non empty è true
}
