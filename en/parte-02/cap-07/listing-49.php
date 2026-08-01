<?php

define('yellow', 4);   // a constant named yellow with value 4

print_r($ar[yellow]);
// PHP replaces the constant with its value: $ar[4]
// and at position 4 there is... the array [2, 4, 24, 44, 100]!
