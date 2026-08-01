<?php

$name = '';
var_dump(is_null($name));   // bool(false): la stringa empty NON è null

var_dump(null == '');       // bool(true)  — confronto debole: entrambi falsy
var_dump(null === '');      // bool(false) — tipi diversi!
