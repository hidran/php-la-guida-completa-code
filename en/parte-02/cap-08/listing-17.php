$a = null;
$b = '';

var_dump($a != $b);  // bool(false) — after casting they are equal
var_dump($a !== $b); // bool(true)  — one is null, the other is a string
