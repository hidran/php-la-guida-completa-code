<?php

declare(strict_types=1);

protected function json(array $data, int $status = 200): ResponseInterface
{
    return new Response(
        $status,
        ['Content-Type' => 'application/json'],
        json_encode($data, JSON_THROW_ON_ERROR)
    );
}
