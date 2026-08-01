function sum(?int $a, ?int $b): int
{
    if ($a === null || $b === null) {
        return null; // ERROR: el tipo de retorno es int
    }

    return $a + $b;
}
