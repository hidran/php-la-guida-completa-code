function sumOld()
{
    $suma = 0;

    foreach (func_get_args() as $val) {
        $suma += $val;
    }

    return $suma;
}
