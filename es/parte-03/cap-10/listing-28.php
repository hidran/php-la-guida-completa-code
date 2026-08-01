<?php

$data = ['name' => 'John Doe'];

function modificar()
{
    var_dump($data); // Warning: $data no está definida aquí dentro
}

modificar();
