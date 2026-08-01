<?php

if (!empty($_FILES)) {
    foreach ($_FILES as $key => $file) {

        // 1. ¿realmente es un archivo subido por HTTP? (seguridad)
        // 2. ¿la subida se completó correctamente?
        if (is_uploaded_file($file['tmp_name']) && $file['error'] === UPLOAD_ERR_OK) {

            $dir = __DIR__ . '/images';
            $fileName = basename($file['name']);
            $destination = $dir . '/' . $fileName;

            if (move_uploaded_file($file['tmp_name'], $destination)) {
                echo "El archivo {$fileName} se ha subido correctamente.<br>";
            }
        }
    }
}
