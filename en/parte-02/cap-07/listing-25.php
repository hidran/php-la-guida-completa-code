<?php

$name = 'John';
$name[4] = 'à';
echo $name;   // Hidr�  ← corrupted character!
