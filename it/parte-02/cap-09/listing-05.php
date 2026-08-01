<?php

$money = 30;

if ($money <= 10) {
    echo 'Puoi comprare una pizza';
} elseif ($money > 10 && $money <= 20) {
    echo 'Puoi comprare una pizza e una birra';
} elseif ($money > 20 && $money <= 30) {
    echo 'Puoi andare al ristorante';
} else {
    echo 'Puoi portare un amico al ristorante';
}
