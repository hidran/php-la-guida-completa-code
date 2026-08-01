$numbers = [6.4, 3.2, 5.7];
$truncated = array_map('floor', $numbers);
print_r($truncated);
// Array ( [0] => 6 [1] => 3 [2] => 5 )
