$name = 'John Doe';

function modificar()
{
    $GLOBALS['name'] = 'Juana'; // accedemos a la global mediante su clave
}

modificar();
echo $GLOBALS['name']; // Juana
