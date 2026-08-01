<?php
abstract class Controller
{
    abstract public function index(): string;

    protected function render(string $view): string
    {
        return "render " . $view;
    }
}
