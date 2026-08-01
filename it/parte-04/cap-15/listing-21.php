while (($entry = readdir($handle)) !== false) {
    echo $entry, '<br>';
}
closedir($handle);
