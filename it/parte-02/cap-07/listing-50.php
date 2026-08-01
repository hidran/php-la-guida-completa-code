<?php

$ar['5'] = 'cinque';   // la stringa "5" diventa la chiave INTERA 5
$ar['5.0'] = 'a';      // "5.0" NON è un intero: resta la stringa "5.0"
$ar['5.2'] = 'b';      // resta la stringa "5.2"
$ar[5.2] = 'c';        // float senza apici: TRONCATO alla chiave intera 5!
