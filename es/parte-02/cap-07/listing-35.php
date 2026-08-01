<?php

$accounts = [2, 3];
$accounts['accountNumber'] = 223344;

$data = <<<EOD
El número de cuenta es {$accounts['accountNumber']}
EOD;

echo $data;   // El número de cuenta es 223344
