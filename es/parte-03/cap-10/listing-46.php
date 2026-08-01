function suma(int $a, int $b, callable $c)
{
    $c();
    return $a + $b;
}

// pasamos los argumentos por nombre, en el orden que prefiramos:
suma(
    b: 5,
    a: 10,
    c: fn() => print("cálculo en curso\n"),
);
