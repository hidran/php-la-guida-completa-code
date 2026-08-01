<?php

$money = false;

// switch: confronto debole
switch ($money) {
    case 0:
        echo 'You have no money (switch)';
        break;
}

// match: confronto stretto
match ($money) {
    1 > 2 => print 'false',
    0     => print 'You have no money',
    1     => print 'You have 1 euro',
    2     => print 'You have 2 euros',
};
