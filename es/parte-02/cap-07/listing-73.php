<?php

$name = '';
var_dump(is_null($name));   // bool(false): la cadena vacía NO es null

var_dump(null == '');       // bool(true)  — comparación débil: ambos valores son falsy
var_dump(null === '');      // bool(false) — tipos diferentes!
