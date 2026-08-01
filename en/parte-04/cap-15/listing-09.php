$hd = fopen($fileName, 'a');
fwrite($hd, 'Seconda scrittura su file');
fclose($hd);
