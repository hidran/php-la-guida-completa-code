function calculateAreaPerimeter(int $a, int $b): array
{
    $area = $a * $b;
    $perimeter = 2 * ($a + $b);

    return [$area, $perimeter];
}
