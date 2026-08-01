function test()
{
    $testGlobal = 'prueba de función';

    echo $testGlobal;              // "prueba de función"  → variable local
    echo $GLOBALS['testGlobal'];   // "Esta es una variable global" → global
}
