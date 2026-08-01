$g = 2;
$h = 1;

$i = $g <=> $h;

if ($i === 0) {
    echo 'g e h sono uguali';
} elseif ($i === -1) {
    echo 'g è minore di h';
} else {
    echo 'g è maggiore di h';
}
// Output: g è maggiore di h
