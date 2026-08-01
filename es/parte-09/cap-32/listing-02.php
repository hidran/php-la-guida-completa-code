<?php
class Router
{
    private array $routes = [];

    public function add(string $method, string $path, array $handler): void
    {
        $this->routes[] = compact("method", "path", "handler");
    }

    public function dispatch(string $method, string $uri): mixed
    {
        foreach ($this->routes as $route) {
            if ($route["method"] === $method && $route["path"] === $uri) {
                [$class, $action] = $route["handler"];
                return (new $class())->$action();
            }
        }

        http_response_code(404);
        return "Página no encontrada";
    }
}
