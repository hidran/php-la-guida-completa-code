function sum(int $a, int $b, array $c): int
{
    return $a + $b;
}

sum(5, 5, []);          // ok: empty array
sum(5, 5, 'non array'); // TypeError: the third argument is not an array
