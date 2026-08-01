<?php

$verify = 'Hello world';
var_dump($verify);   // string(11) "Hello world"

if ($verify) {
    echo 'Verify is true';   // is executed!
}
