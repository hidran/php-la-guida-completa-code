for ($j = 0; $j < 3; $j++) {
    for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
        if ($j == 1) {
            break; // exits only the inner loop!
        }

        echo "$j {$ar[$i]}<br>";
    }
}
