<?php

$data = ['name' => 'idra', 'surname' => 'arias', 'city' => 'torino'];

$result = array_map(fn($val) => strtoupper($val), $data);
print_r($result);
// Array ( [name] => IDRA [surname] => ARIAS [city] => TORINO )
