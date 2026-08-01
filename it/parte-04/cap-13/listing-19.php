function test()
{
    var_dump($_GET, $_POST, $_SERVER);
}

test(); // funziona: le superglobali sono visibili anche qui dentro
