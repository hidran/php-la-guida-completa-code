function somma(int $a, int $b, array $c): int
{
    return $a + $b;
}

somma(5, 5, []);          // ok: array vuoto
somma(5, 5, 'non array'); // TypeError: il terzo argomento non è un array
