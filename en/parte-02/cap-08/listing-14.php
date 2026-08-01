var_dump(null == false); // bool(true)  — casting makes them equal
var_dump(null == '');    // bool(true)  — la empty string "vale" null
var_dump(null == '0');   // bool(false) — the string '0' is NOT equal to null
