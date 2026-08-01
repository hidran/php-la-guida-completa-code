<?php

$object = new stdClass();
$object->name = 'Jim';

$data = <<<EOD
Il nome è $object->name
EOD;

echo $data;   // Il nome è Jim
