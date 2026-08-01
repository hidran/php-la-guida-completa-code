function sumOld()
{
    $sum = 0;

    foreach (func_get_args() as $val) {
        $sum += $val;
    }

    return $sum;
}
