<?php
$user = [
    "name" => "John",
    "email" => "john@example.com",
];

array_walk($user, function ($value, $key) {
    echo "$key: $value" . PHP_EOL;
});
