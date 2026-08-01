$object = 'John';

function modifica()
{
    global $object;

    var_dump($object); // ora vediamo 'John'
    $object = 'Idra';  // e possiamo anche modificarla
}

modifica();
var_dump($object); // 'Idra': la modifica si riflette fuori!
