function somma(int $a, int $b, callable $c)
{
    $c();
    return $a + $b;
}

// passiamo gli argomenti per nome, nell'ordine che preferiamo:
somma(
    b: 5,
    a: 10,
    c: fn() => print("calcolo in corso\n"),
);
