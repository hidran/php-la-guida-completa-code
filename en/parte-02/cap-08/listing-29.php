$g = 2;
$h = 1;

$i = $g <=> $h;

if ($i === 0) {
    echo 'g and h are equal';
} elseif ($i === -1) {
    echo 'g is less than h';
} else {
    echo 'g is greater than h';
}
// Output: g is greater than h
