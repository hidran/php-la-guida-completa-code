foreach ($films as $film) {
    $movie = $dom->createElement('movie');

    foreach ($film as $tag => $value) {
        $element = $dom->createElement($tag);
        $text = $dom->createTextNode($value);
        $element->appendChild($text);
        $movie->appendChild($element);
    }

    $root->appendChild($movie);
}
