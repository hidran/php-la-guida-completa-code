<?php
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($_FILES["avatar"]["tmp_name"]);

$allowed = ["image/jpeg", "image/png", "image/webp"];

if (!in_array($mime, $allowed, true)) {
    $errors["avatar"] = "Formato immagine non supportato";
}
