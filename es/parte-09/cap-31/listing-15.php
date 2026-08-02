<?php

namespace App\Core;

use Exception;

final class Router
{
    public function __construct(private array $routes = ['GET' => [], 'POST' => []])
    {
    }

    public function dispatch(): array
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $segment = trim(parse_url($uri, PHP_URL_PATH), '/') ?: '/';
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $routes = $this->routes[$method] ?? [];

        if (array_key_exists($segment, $routes)) {
            return [$routes[$segment][0], $routes[$segment][1], []];
        }

        return $this->matchRoute($routes, $segment)
            ?: throw new Exception('Ninguna ruta encontrada');
    }
}
