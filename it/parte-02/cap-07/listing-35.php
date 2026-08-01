<?php

$accounts = [2, 3];
$accounts['accountNumber'] = 223344;

$data = <<<EOD
Il numero di conto è {$accounts['accountNumber']}
EOD;

echo $data;   // Il numero di conto è 223344
