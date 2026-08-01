<?php

$money = false;

// switch: confronto debole
switch ($money) {
    case 0:
        echo 'Non hai soldi (switch)';
        break;
}

// match: confronto stretto
match ($money) {
    1 > 2 => print 'false',
    0     => print 'Non hai soldi',
    1     => print 'Hai 1 euro',
    2     => print 'Hai 2 euro',
};
