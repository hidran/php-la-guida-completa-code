<?php
interface Logger
{
    public function info(string $message): void;
}

class FileLogger implements Logger
{
    public function info(string $message): void
    {
        file_put_contents("app.log", $message . PHP_EOL, FILE_APPEND);
    }
}
