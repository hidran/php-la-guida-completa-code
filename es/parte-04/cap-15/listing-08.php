rewind($hd);

$content = '';
while (!feof($hd)) {
    $content .= fread($hd, 1024); // leemos 1 kilobyte a la vez
}
fclose($hd);

echo $content;
