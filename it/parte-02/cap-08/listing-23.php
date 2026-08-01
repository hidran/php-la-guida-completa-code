$id = 4;       // il valore che ci aspettiamo: un integer
$result = '4'; // il valore arrivato da un form: sempre una stringa

var_dump($result);         // string(1) "4"
var_dump($id == $result);  // bool(true)
var_dump($id === $result); // bool(false) — tipi diversi
