<?php

$object = new stdClass();
$object->name = 'Jim';

$data = <<<EOD
The name is $object->name
EOD;

echo $data;   // The name is Jim
