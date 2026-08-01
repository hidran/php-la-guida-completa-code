$g = 2;
$h = 1;

$i = $g <=> $h;

if ($i === 0) {
    echo 'g y h son iguales';
} elseif ($i === -1) {
    echo 'g es menor que h';
} else {
    echo 'g es mayor que h';
}
// Output: g es mayor que h
