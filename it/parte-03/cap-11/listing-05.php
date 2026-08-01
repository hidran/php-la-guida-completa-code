<?php
$text = "Ciao {name}, benvenuto in {course}.";

echo str_replace(
    ["{name}", "{course}"],
    ["Mario", "PHP"],
    $text
);
