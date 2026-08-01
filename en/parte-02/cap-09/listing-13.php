$result = match ($money) {
    0 => print 'You have no money',
    // ...
    default => print 'None of the values'
};

var_dump($result); // int(1)
