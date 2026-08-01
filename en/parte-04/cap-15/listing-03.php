if ($hd) {
    fwrite($hd, 'First write to file');
} else {
    echo 'Unable to create the file';
}
