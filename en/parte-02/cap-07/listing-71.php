<?php

// $name never declared     -> empty (and no warning!)
$name = '';       // empty
$name = 'Johnn'; // not empty
$name = 0;        // empty
$name = '0';      // empty — watch out!
$name = 0.0;      // empty
$name = null;     // empty
$name = false;    // empty
$name = [];       // empty (array with no elements)
