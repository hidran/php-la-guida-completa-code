<?php

$accounts = [2, 3];
$accounts['accountNumber'] = 223344;

$data = <<<EOD
The account number is {$accounts['accountNumber']}
EOD;

echo $data;   // The account number is 223344
