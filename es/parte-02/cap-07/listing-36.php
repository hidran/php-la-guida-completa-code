<?php

$object = new stdClass();
$object->name = 'Jim';

$data = <<<EOD
El nombre es $object->name
EOD;

echo $data;   // El nombre es Jim
