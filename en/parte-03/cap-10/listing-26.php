function sum(?int $a, ?int $b): ?int
{
    if ($a === null || $b === null) {
        return null;
    }

    return $a + $b;
}
