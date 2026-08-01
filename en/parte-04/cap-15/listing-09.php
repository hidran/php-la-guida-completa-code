$hd = fopen($fileName, 'a');
fwrite($hd, 'Second write to file');
fclose($hd);
