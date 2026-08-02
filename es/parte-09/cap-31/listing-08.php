<?php

return [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'freeblog',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'options' => [
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
    ],
];
