$result = match ($money) {
    0 => print 'Non hai soldi',
    // ...
    default => print 'Nessuno dei valori'
};

var_dump($result); // int(1)
