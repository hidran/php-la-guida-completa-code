function test()
{
    $testGlobal = 'function test';

    echo $testGlobal;              // "function test"  → local variable
    echo $GLOBALS['testGlobal'];   // "This is a global variable" → global
}
