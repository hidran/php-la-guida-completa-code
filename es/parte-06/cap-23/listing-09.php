<?php
if ($password !== "") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // actualiza también la contraseña
}
