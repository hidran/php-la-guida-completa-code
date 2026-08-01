<?php
$maxSize = 2 * 1024 * 1024;

if ($_FILES["avatar"]["size"] > $maxSize) {
    $errors["avatar"] = "The file exceeds 2 MB";
}
