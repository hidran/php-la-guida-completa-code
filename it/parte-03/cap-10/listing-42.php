function sumOld()
{
    $somma = 0;

    foreach (func_get_args() as $val) {
        $somma += $val;
    }

    return $somma;
}
