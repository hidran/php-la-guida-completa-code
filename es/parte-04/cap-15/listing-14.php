$content = '';

if (file_exists($fileName)) {
    $content = file_get_contents($fileName);
}

file_put_contents($fileName, $content . "\n" . 'Segundo contenido');
