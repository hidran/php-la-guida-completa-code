foreach ($d as $entry) {
    // skip the current and parent folders
    if ($entry == '.' || $entry == '..') {
        continue;
    }

    echo $entry;
    var_dump(is_dir($dir . '/' . $entry));
    var_dump(is_file($dir . '/' . $entry));
    echo '<br>';
}
