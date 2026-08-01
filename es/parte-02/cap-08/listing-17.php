$a = null;
$b = '';

var_dump($a != $b);  // bool(false) — dopo il cast risultano uguali
var_dump($a !== $b); // bool(true)  — uno è null, l'altra è una stringa
