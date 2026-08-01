$object = 'John';

function modificar()
{
    global $object;

    var_dump($object); // ahora vemos 'John'
    $object = 'Juana';  // y también podemos modificarla
}

modificar();
var_dump($object); // 'Juana': la modificación se refleja fuera!
