$id = 4;       // el valor que esperamos: un integer
$result = '4'; // el valor recibido desde un form: siempre un string

var_dump($result);         // string(1) "4"
var_dump($id == $result);  // bool(true)
var_dump($id === $result); // bool(false) — tipi diversi
