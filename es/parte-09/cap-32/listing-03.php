<?php

declare(strict_types=1);

final class Request
{
    public function __construct(
        public readonly string $method,
        public readonly string $uri,
        public readonly array $query,
        public readonly array $post,
        public readonly array $headers,
    ) {
    }

    public function postString(string $key, string $default = ''): string
    {
        $value = $this->post[$key] ?? $default;
        return is_array($value) ? $default : (string) $value;
    }
}
