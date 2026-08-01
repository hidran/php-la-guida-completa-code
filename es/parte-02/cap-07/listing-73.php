<?php

$name = '';
var_dump(is_null($name));   // bool(false): la cadena vacía NO es null

var_dump(null == '');       // bool(true)  — confronto debole: entrambi falsy
var_dump(null === '');      // bool(false) — tipos diferentes!
