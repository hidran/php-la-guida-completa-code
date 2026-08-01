<?php
function json_response(array $data, int $status = 200): string
{
    http_response_code($status);
    header("Content-Type: application/json");

    return json_encode($data, JSON_UNESCAPED_UNICODE);
}
