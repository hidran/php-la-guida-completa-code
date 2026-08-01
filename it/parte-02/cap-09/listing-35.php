foreach ($ar as &$val) {
    $val = strtoupper($val);
}
unset($val); // elimina il riferimento

$val = 'nessun valore'; // ora è una variabile qualsiasi
var_dump($ar);          // l'array è intatto: PINK c'è ancora
