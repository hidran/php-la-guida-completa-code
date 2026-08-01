var_dump(4 == 4);    // bool(true)
var_dump(4 == '4');  // bool(true) — numeric string
var_dump(4 == ' 4'); // bool(true) — and no warning for the space
