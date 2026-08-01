function sum(?int $a, ?int $b): int
{
    if ($a === null || $b === null) {
        return null; // ERRORE: il tipo di ritorno è int
    }

    return $a + $b;
}
