$name = 'John Doe';

function modify()
{
    $GLOBALS['name'] = 'Jane'; // access the global through its key
}

modify();
echo $GLOBALS['name']; // Jane
