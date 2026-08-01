rewind($hd);

$content = '';
while (!feof($hd)) {
    $content .= fread($hd, 1024); // leggiamo 1 kilobyte alla volta
}
fclose($hd);

echo $content;
