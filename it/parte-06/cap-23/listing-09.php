<?php
if ($password !== "") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // aggiorna anche la password
}
