<?php
$text = "Hola {name}, bienvenido a {course}.";

echo str_replace(
    ["{name}", "{course}"],
    ["Juan", "PHP"],
    $text
);
