<?php

$money = 30;

if ($money <= 10) {
    echo 'You can buy a pizza';
} elseif ($money > 10 && $money <= 20) {
    echo 'You can buy a pizza and a beer';
} elseif ($money > 20 && $money <= 30) {
    echo 'You can go to a restaurant';
} else {
    echo 'You can bring a friend to the restaurant';
}
