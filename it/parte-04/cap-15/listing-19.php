foreach ($d as $entry) {
    // saltiamo la cartella corrente e la parent
    if ($entry == '.' || $entry == '..') {
        continue;
    }

    echo $entry;
    var_dump(is_dir($dir . '/' . $entry));
    var_dump(is_file($dir . '/' . $entry));
    echo '<br>';
}
