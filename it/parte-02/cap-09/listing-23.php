for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
    if ($ar[$i] == 'pink') {
        continue;
    }

    echo "<li>{$ar[$i]}</li>";
}
