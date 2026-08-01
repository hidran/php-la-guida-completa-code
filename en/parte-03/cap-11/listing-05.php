<?php
$text = "Hello {name}, welcome to {course}.";

echo str_replace(
    ["{name}", "{course}"],
    ["Mario", "PHP"],
    $text
);
