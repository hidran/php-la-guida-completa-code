$result = match ($money) {
    0      => 'No tienes dinero',
    1      => 'Tienes 1 euro',
    2      => 'Tienes 2 euros',
    3, 4   => 'Tienes 3 o 4 euros',
    default => 'Ninguno de los valores'
};

echo $result;
