$result = match ($money) {
    0      => 'Non hai soldi',
    1      => 'Hai 1 euro',
    2      => 'Hai 2 euro',
    3, 4   => 'Hai 3 o 4 euro',
    default => 'Nessuno dei valori'
};

echo $result;
