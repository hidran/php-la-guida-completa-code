$object = 'John';

function modify()
{
    global $object;

    var_dump($object); // now we see 'John'
    $object = 'Jane';  // and we can also modify it
}

modify();
var_dump($object); // 'Jane': the change is reflected outside!
