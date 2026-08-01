rewind($hd);

$content = '';
while (!feof($hd)) {
    $content .= fread($hd, 1024); // read 1 kilobyte at a time
}
fclose($hd);

echo $content;
