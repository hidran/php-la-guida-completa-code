<?php
$text = "Hola {name}, bienvenido a {tema}.";

echo str_replace(
    ["{name}", "{tema}"],
    ["Juan", "PHP"],
    $text
);
