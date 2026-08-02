<?php

return [
    'mysql_host' => 'db',
    'mysql_user' => 'root',
    'mysql_password' => 'hidran',
    'mysql_db' => 'corsophp',
    'recordsPerPage' => 10,
    'maxLinks' => 10,
    'orderByColumns' =>
        ['id', 'username', 'fiscalcode', 'age', 'email', 'role_type'],
    'uploadDir' => 'avatar',
    'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
    'roleTypes' => ['user', 'admin', 'editor'],
    'rememberMeTTL' => 60 * 60 * 24 * 30,
    'rememberMeCookieName' => 'ums_remember_token'
];
