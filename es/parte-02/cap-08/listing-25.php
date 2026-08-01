$data = [4, 5, 'php'];

var_dump(in_array('5a', $data)); // PHP 7: bool(true) — PHP 8: bool(false)
var_dump(in_array(' 5', $data)); // bool(true) en ambas (solo espacios)
var_dump(in_array(0, $data));    // PHP 7: bool(true)! — PHP 8: bool(false)
