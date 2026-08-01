<?php

$verify = 'false';   // 5-character string, NOT the Boolean false
var_dump($verify);   // string(5) "false"

if ($verify) {
    echo 'Enters the true branch!';   // yes: a non-empty string is true
}
