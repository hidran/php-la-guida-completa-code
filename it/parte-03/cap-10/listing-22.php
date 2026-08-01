function esegui(callable $c): void
{
    $c(); // invochiamo ciò che ci è stato passato
}

function test()
{
    echo "test\n";
}

esegui('test');                       // passiamo il nome come stringa
esegui(function () { echo "anon\n"; }); // passiamo una funzione anonima
