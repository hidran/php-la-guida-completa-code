<?php
function view(string $template, array $data = []): string
{
    extract($data);

    ob_start();
    require __DIR__ . "/../../views/" . $template . ".php";
    return ob_get_clean();
}
