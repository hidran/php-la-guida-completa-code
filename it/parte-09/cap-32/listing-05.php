<?php
require __DIR__ . "/../vendor/autoload.php";

$router = new Router();

foreach (require __DIR__ . "/../config/routes.php" as $route) {
    [$method, $path, $handler] = $route;
    $router->add($method, $path, $handler);
}

echo $router->dispatch(
    $_SERVER["REQUEST_METHOD"],
    parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)
);
