<?php

$money = 30;

if ($money <= 10) {
    echo 'Puedes comprar una pizza';
} elseif ($money > 10 && $money <= 20) {
    echo 'Puedes comprar una pizza y una cerveza';
} elseif ($money > 20 && $money <= 30) {
    echo 'Puedes ir al restaurante';
} else {
    echo 'Puedes llevar a un amigo al restaurante';
}
