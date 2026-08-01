$numbers = [6.4, 3.2, 5.7];
$truncados = array_map('floor', $numbers);
print_r($truncados);
// Array ( [0] => 6 [1] => 3 [2] => 5 )
