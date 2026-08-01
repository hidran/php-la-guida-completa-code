function suma(int $a, int $b, array $c): int
{
    return $a + $b;
}

suma(5, 5, []);          // ok: array vacío
suma(5, 5, 'no es un array'); // TypeError: el tercer argumento no es un array
