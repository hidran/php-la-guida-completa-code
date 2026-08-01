$id = 1;

foreach ($films as $film) {
    $movie = $dom->createElement('movie');
    $movie->setAttribute('id', $id++);
    // …rest of the loop…
}
