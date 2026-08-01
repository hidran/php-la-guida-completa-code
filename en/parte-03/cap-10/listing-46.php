function sum(int $a, int $b, callable $c)
{
    $c();
    return $a + $b;
}

// pass the arguments by name, in the order we prefer:
sum(
    b: 5,
    a: 10,
    c: fn() => print("calculation in progress\n"),
);
