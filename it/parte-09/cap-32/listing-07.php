<?php
function render(string $template, array $data = []): string
{
    $content = view($template, $data);

    return view("layout", [
        "content" => $content,
    ]);
}
