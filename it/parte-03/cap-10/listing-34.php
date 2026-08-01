function doubleVal($val)
{
    return $val * 2;
}

$double = array_map('doubleVal', $numbers);
print_r($double);
// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
