<?php

$name = 'Juan';
$name[4] = 'à';
echo $name;   // Hidr�  ← carácter corrupto!
