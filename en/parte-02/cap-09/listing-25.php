for ($j = 0; $j < 3; $j++) {
    for ($i = 0, $tot = count($ar); $i < $tot; $i++) {
        if ($i == 4) {
            $hr = '<hr>';
        } else {
            $hr = '';
        }

        echo "$j {$ar[$i]}<br>" . $hr;
    }
}
