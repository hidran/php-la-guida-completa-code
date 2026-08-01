<?php

$money = false;

// switch: weak comparison
switch ($money) {
    case 0:
        echo 'You have no money (switch)';
        break;
}

// match: strict comparison
match ($money) {
    1 > 2 => print 'false',
    0     => print 'You have no money',
    1     => print 'You have 1 euro',
    2     => print 'You have 2 euros',
};
