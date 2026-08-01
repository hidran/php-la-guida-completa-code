<?php

$ar['5'] = 'cinque';   // the string "5" becomes the INTEGER key 5
$ar['5.0'] = 'a';      // "5.0" is NOT an integer: it remains the string "5.0"
$ar['5.2'] = 'b';      // it remains the string "5.2"
$ar[5.2] = 'c';        // float without quotes: TRUNCATED to integer key 5!
