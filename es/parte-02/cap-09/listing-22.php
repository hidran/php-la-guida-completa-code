for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
    echo "<li>{$ar[$i]}</li>";

    if ($i == 2) {
        break;
    }
}
