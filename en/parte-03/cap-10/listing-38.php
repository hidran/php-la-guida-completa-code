<?php

$data = ['name' => 'john', 'surname' => 'doe', 'city' => 'london'];

$result = array_map(fn($val) => strtoupper($val), $data);
print_r($result);
// Array ( [name] => JOHN [surname] => DOE [city] => LONDON )
