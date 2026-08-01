<?php

$data = ['name' => 'juan', 'surname' => 'perez', 'city' => 'madrid'];

$result = array_map(fn($val) => strtoupper($val), $data);
print_r($result);
// Array ( [name] => JUAN [surname] => PEREZ [city] => MADRID )
