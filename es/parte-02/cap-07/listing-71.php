<?php

// $name nunca declarada     -> vacía (y sin warning!)
$name = '';       // vacía
$name = 'Juan'; // no vacía
$name = 0;        // vacía
$name = '0';      // vacía — atención!
$name = 0.0;      // vacía
$name = null;     // vacía
$name = false;    // vacía
$name = [];       // vacía (array sin elementos)
