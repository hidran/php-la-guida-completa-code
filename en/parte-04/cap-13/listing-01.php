<?php

$testGlobal = 'This is a global variable';

function test()
{
    var_dump($GLOBALS);
}

test();
