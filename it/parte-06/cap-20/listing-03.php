<?php

$action = 'store';
$buttonName = 'SAVE';
$formTile = 'INSERT USER';
if ($user && $user['id']) {
    $action = 'update';
    $buttonName = 'UPDATE';
    $formTile = 'UPDATE USER';
}
foreach ($user as &$value) {
    $value = htmlspecialchars($value ?? '');
}
?>
