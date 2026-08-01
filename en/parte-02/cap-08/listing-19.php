$d = 0;
$e = 1;

$f = $d > $e;
var_dump($f);       // bool(false) — zero is not greater than one

var_dump($d < $e);  // bool(true)  — zero is less than one
var_dump($d <= $e); // bool(true)  — it is less, so "less than or equal" is also true
var_dump(1 <= 1);   // bool(true)  — it is not less, but it is equal
var_dump(2 <= 1);   // bool(false)
var_dump(2 >= 1);   // bool(true)
