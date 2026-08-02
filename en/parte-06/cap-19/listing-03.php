<?php

declare(strict_types=1);
function getConnection(): mysqli
{
    $config = require 'config.php';

    $mysqli = new mysqli(
        $config['mysql_host'],
        $config['mysql_user'],
        $config['mysql_password'],
        $config['mysql_db']
    );

    if ($mysqli->connect_error) {
        die($mysqli->connect_error);
    }
    return $mysqli;
}
