<?php
$text = "Ciao {name}, benvenuto in {topic}.";

echo str_replace(
    ["{name}", "{topic}"],
    ["Mario", "PHP"],
    $text
);
