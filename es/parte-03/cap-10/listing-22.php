function ejecutar(callable $c): void
{
    $c(); // invocamos lo que se nos pasó
}

function test()
{
    echo "test\n";
}

ejecutar('test');                       // pasamos el nombre como string
ejecutar(function () { echo "anon\n"; }); // pasamos una función anónima
