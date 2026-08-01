<?php

$data = ['name' => 'John Doe'];

function modifica()
{
    var_dump($data); // Warning: $data non è definita qui dentro
}

modifica();
