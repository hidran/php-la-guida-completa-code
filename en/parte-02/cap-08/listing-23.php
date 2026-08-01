$id = 4;       // the value we expect: an integer
$result = '4'; // the value received from a form: always a string

var_dump($result);         // string(1) "4"
var_dump($id == $result);  // bool(true)
var_dump($id === $result); // bool(false) — different types
