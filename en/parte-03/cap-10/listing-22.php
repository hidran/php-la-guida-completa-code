function run(callable $c): void
{
    $c(); // invoke what was passed to us
}

function test()
{
    echo "test\n";
}

run('test');                       // pass the name as a string
run(function () { echo "anon\n"; }); // passiamo una funzione anonima
