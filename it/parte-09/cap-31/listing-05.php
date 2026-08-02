<?php

namespace App\Controllers;

abstract class BaseController
{
    protected string $content = '';
    protected string $tplDir = 'app/views/';
    protected string $layout = 'layout/index.tpl.php';

    public function display(): void
    {
        require $this->layout;
    }
}
