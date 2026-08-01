$name = 'John Doe';

function modifica()
{
    $GLOBALS['name'] = 'Idra'; // accediamo alla globale tramite la sua chiave
}

modifica();
echo $GLOBALS['name']; // Idra
