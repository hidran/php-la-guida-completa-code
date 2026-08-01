<?php
$maxSize = 2 * 1024 * 1024;

if ($_FILES["avatar"]["size"] > $maxSize) {
    $errors["avatar"] = "El archivo supera los 2 MB";
}
