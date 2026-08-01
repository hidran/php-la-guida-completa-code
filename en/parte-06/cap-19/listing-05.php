<?php
$names = ["Alice", "Bob", "Carol", "Diana"];
$domains = ["example.com", "test.local"];

$name = $names[array_rand($names)];
$email = strtolower($name) . rand(1, 999) . "@" . $domains[array_rand($domains)];
