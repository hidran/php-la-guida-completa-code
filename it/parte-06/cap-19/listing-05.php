<?php
$names = ["Mario", "Lucia", "Anna", "Giulia"];
$domains = ["example.com", "test.local"];

$name = $names[array_rand($names)];
$email = strtolower($name) . rand(1, 999) . "@" . $domains[array_rand($domains)];
