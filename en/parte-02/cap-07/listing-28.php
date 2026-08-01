<?php

var_dump((string) null);    // string(0) ""
var_dump((string) true);    // string(1) "1"
var_dump((string) false);   // string(0) ""

$bool = true;
echo $bool;   // 1  (conversione automatica, senza cast)

$bool = false;
echo $bool;   // (non si vede niente: stringa empty)
