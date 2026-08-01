foreach ($ar as &$val) {
    $val = strtoupper($val);
}
unset($val); // remove the reference

$val = 'no value'; // now it is a regular variable
var_dump($ar);          // the array is intact: PINK is still there
