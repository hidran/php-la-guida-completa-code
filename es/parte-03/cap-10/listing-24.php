function sum(?int $a, ?int $b): int
{
    return $a + $b;
}

$result = sum(null, null);
var_dump($result); // int(0)
