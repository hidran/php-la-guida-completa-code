function test()
{
    var_dump($_GET, $_POST, $_SERVER);
}

test(); // works: superglobals are visible in here too
