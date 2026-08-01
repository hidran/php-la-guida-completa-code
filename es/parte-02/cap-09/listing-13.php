$result = match ($money) {
    0 => print 'No tienes dinero',
    // ...
    default => print 'Ninguno de los valores'
};

var_dump($result); // int(1)
