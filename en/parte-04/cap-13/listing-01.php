<?php

$testGlobal = 'Questa è una variabile globale';

function test()
{
    var_dump($GLOBALS);
}

test();
