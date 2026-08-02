<?php

declare(strict_types=1);

final class View
{
    public function render(string $template, array $data = []): string
    {
        $file = $this->viewsDir . '/' . $template . '.tpl.php';
        extract($data, EXTR_OVERWRITE);

        ob_start();
        require $file;

        return (string) ob_get_clean();
    }
}
