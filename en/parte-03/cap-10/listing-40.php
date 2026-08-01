$prefix = 'Mr. ';

$result = array_map(fn($val) => $prefix . strtoupper($val), $data);
