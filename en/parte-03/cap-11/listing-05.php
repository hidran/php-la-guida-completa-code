<?php
$text = "Hello {name}, welcome to {topic}.";

echo str_replace(
    ["{name}", "{topic}"],
    ["John", "PHP"],
    $text
);
