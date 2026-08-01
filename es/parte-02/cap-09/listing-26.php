for ($j = 0; $j < 3; $j++) {
    for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
        if ($j == 1) {
            break; // sale solo del ciclo interno!
        }

        echo "$j {$ar[$i]}<br>";
    }
}
