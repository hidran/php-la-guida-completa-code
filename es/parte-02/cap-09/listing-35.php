foreach ($ar as &$val) {
    $val = strtoupper($val);
}
unset($val); // elimina la referencia

$val = 'sin valor'; // ahora es una variable normal
var_dump($ar);          // el array está intacto: PINK sigue ahí
