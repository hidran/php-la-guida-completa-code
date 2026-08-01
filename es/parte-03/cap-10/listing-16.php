function calcularAreaPerimetro(int $a, int $b): array
{
    $area = $a * $b;
    $perimetro = 2 * ($a + $b);

    return [$area, $perimetro];
}
