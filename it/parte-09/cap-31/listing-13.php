<?php

use App\Controllers\BaseController;
use App\Core\Router;
use App\Db\DbFactory;

chdir(dirname(__DIR__));

require_once 'core/bootstrap.php';

$database = require 'config/database.php';
$appConfig = require 'config/app.config.php';

$router = new Router($appConfig['routes']);
[$controllerClass, $method, $params] = $router->dispatch();

$conn = DbFactory::create($database)->getConn();
$controller = new $controllerClass($conn);
$controller->$method(...$params);

if ($controller instanceof BaseController) {
    $controller->display();
}
