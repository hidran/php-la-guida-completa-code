$d = 0;
$e = 1;

$f = $d > $e;
var_dump($f);       // bool(false) — zero non è maggiore di uno

var_dump($d < $e);  // bool(true)  — zero è minore di uno
var_dump($d <= $e); // bool(true)  — è minore, quindi anche "minore o uguale"
var_dump(1 <= 1);   // bool(true)  — non è minore, ma è uguale
var_dump(2 <= 1);   // bool(false)
var_dump(2 >= 1);   // bool(true)
