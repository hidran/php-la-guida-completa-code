<?php
$text = "Hola {name}, bienvenido a {course}.";

echo str_replace(
    ["{name}", "{course}"],
    ["Mario", "PHP"],
    $text
);
