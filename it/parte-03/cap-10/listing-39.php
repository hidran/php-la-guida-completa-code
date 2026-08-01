$prefix = 'Mr. ';

$result = array_map(function ($val) use ($prefix) {
    return $prefix . strtoupper($val);
}, $data);
