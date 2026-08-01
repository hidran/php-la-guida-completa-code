<?php

$money = false;

// switch: confronto debole
switch ($money) {
    case 0:
        echo 'No tienes dinero (switch)';
        break;
}

// match: confronto stretto
match ($money) {
    1 > 2 => print 'false',
    0     => print 'No tienes dinero',
    1     => print 'Tienes 1 euro',
    2     => print 'Tienes 2 euros',
};
