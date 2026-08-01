<?php

$testGlobal = 'Esta es una variable global';

function test()
{
    var_dump($GLOBALS);
}

test();
