var_dump(null == false); // bool(true)  — el cast los hace iguales
var_dump(null == '');    // bool(true)  — la cadena vacía "vale" null
var_dump(null == '0');   // bool(false) — la cadena '0' NO es igual a null
