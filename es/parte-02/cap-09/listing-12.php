<?php

$money = false;

// switch: comparación débil
switch ($money) {
    case 0:
        echo 'No tienes dinero (switch)';
        break;
}

// match: comparación estricta
match ($money) {
    1 > 2 => print 'false',
    0     => print 'No tienes dinero',
    1     => print 'Tienes 1 euro',
    2     => print 'Tienes 2 euros',
};
