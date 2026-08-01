foreach ($it as $entry) {
    echo $entry->getFilename() . ' - ' . $entry->getSize();
    var_dump($entry->isDir());
    var_dump($entry->isFile());
    echo '<br>';
}
