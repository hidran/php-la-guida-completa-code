<?php

$data = ['name' => 'John Doe'];

function modify()
{
    var_dump($data); // Warning: $data is not defined in here
}

modify();
