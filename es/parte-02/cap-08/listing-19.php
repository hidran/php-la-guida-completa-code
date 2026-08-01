$d = 0;
$e = 1;

$f = $d > $e;
var_dump($f);       // bool(false) — cero no es mayor que uno

var_dump($d < $e);  // bool(true)  — cero es menor que uno
var_dump($d <= $e); // bool(true)  — es menor, así que también es "menor o igual"
var_dump(1 <= 1);   // bool(true)  — no es menor, pero es igual
var_dump(2 <= 1);   // bool(false)
var_dump(2 >= 1);   // bool(true)
