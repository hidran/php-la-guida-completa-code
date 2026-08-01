$numbers = [6.4, 3.2, 5.7];
$troncati = array_map('floor', $numbers);
print_r($troncati);
// Array ( [0] => 6 [1] => 3 [2] => 5 )
