var_dump(null == false); // bool(true)  — il cast li rende uguali
var_dump(null == '');    // bool(true)  — la stringa vacía "vale" null
var_dump(null == '0');   // bool(false) — la stringa '0' NON è uguale a null
