function test()
{
    var_dump($_GET, $_POST, $_SERVER);
}

test(); // funciona: las superglobals también son visibles aquí dentro
