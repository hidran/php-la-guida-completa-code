$hd = fopen($fileName, 'a');
fwrite($hd, 'Segunda escritura en archivo');
fclose($hd);
