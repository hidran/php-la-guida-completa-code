<?php
$user = [
    "name" => "Juan",
    "email" => "juan@example.com",
];

array_walk($user, function ($value, $key) {
    echo "$key: $value" . PHP_EOL;
});
