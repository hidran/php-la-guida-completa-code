<?php

if (!empty($_FILES)) {
    foreach ($_FILES as $key => $file) {

        // 1. is it really a file uploaded via HTTP? (security)
        // 2. did the upload complete successfully?
        if (is_uploaded_file($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {

            $dir = __DIR__ . '/images';
            $fileName = basename($file['name']);
            $destination = $dir . '/' . $fileName;

            if (move_uploaded_file($file['tmp_name'], $destination)) {
                echo "The file {$fileName} was uploaded successfully.<br>";
            }
        }
    }
}
