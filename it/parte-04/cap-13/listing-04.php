function test()
{
    $testGlobal = 'test funzione';

    echo $testGlobal;              // "test funzione"  → variabile locale
    echo $GLOBALS['testGlobal'];   // "Questa è una variabile globale" → globale
}
