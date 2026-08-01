<?php
if ($password !== "") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // also update the password
}
