<?php
$source = imagecreatefromjpeg($destination);
$thumb = imagecreatetruecolor(160, 160);

$width = imagesx($source);
$height = imagesy($source);

imagecopyresampled(
    $thumb,
    $source,
    0,
    0,
    0,
    0,
    160,
    160,
    $width,
    $height
);

imagejpeg($thumb, __DIR__ . "/../uploads/thumb_" . $filename, 85);
