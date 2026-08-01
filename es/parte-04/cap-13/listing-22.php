<?php

if (!empty($_FILES)) {
    foreach ($_FILES as $key => $file) {

        // 1. è davvero un file caricato via HTTP? (sicurezza)
        // 2. l'upload è andato a buon fine?
        if (is_uploaded_file($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {

            $dir = __DIR__ . '/images';
            $fileName = basename($file['name']);
            $destination = $dir . '/' . $fileName;

            if (move_uploaded_file($file['tmp_name'], $destination)) {
                echo "Il file {$fileName} è stato caricato correttamente.<br>";
            }
        }
    }
}
