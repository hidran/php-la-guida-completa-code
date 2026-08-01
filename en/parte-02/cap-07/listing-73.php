<?php

$name = '';
var_dump(is_null($name));   // bool(false): the empty string is NOT null

var_dump(null == '');       // bool(true)  — confronto debole: entrambi falsy
var_dump(null === '');      // bool(false) — different types!
