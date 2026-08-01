$a = null;
$b = '';

var_dump($a != $b);  // bool(false) — después del cast resultan iguales
var_dump($a !== $b); // bool(true)  — uno es null, el otro es una cadena
