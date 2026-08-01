function sum(?int $a, ?int $b): int
{
    if ($a === null || $b === null) {
        return null; // ERROR: the return type is int
    }

    return $a + $b;
}
