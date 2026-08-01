$result = match ($money) {
    0      => 'You have no money',
    1      => 'You have 1 euro',
    2      => 'You have 2 euros',
    3, 4   => 'You have 3 or 4 euros',
    default => 'None of the values'
};

echo $result;
