<?php
$user = [
    "name" => "Mario",
    "email" => "mario@example.com",
];

array_walk($user, function ($value, $key) {
    echo "$key: $value" . PHP_EOL;
});
