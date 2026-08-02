<?php

declare(strict_types=1);

final class Router
{
    public function dispatch(string $method, string $uri): array
    {
        foreach ($this->routes[$method] ?? [] as $path => $handler) {
            $pattern = '#^' . preg_replace('/:([A-Za-z_][A-Za-z0-9_]*)/', '([^/]+)', trim($path, '/')) . '$#';

            if (preg_match($pattern, trim($uri, '/'), $matches)) {
                array_shift($matches);
                return [$handler[0], $handler[1], $matches];
            }
        }

        throw new RouteNotFoundException("No route for {$method} {$uri}");
    }
}
