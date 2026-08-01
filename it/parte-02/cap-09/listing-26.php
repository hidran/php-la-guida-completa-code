for ($j = 0; $j < 3; $j++) {
    for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
        if ($j == 1) {
            break; // esce solo dal ciclo interno!
        }

        echo "$j {$ar[$i]}<br>";
    }
}
