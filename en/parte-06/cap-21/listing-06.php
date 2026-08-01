<?php
$extension = match ($mime) {
    "image/jpeg" => "jpg",
    "image/png" => "png",
    "image/webp" => "webp",
};

$filename = bin2hex(random_bytes(16)) . "." . $extension;
$destination = __DIR__ . "/../uploads/" . $filename;
