<?php
$maxSize = 2 * 1024 * 1024;

if ($_FILES["avatar"]["size"] > $maxSize) {
    $errors["avatar"] = "Il file supera 2 MB";
}
