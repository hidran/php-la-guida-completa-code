if ($hd) {
    fwrite($hd, 'Primera escritura en archivo');
} else {
    echo 'No se puede crear el archivo';
}
