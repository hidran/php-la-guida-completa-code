<?php

use App\Controllers\BaseController;
use App\Core\Router;
use App\Db\DbFactory;

chdir(dirname(__DIR__));

require_once 'core/bootstrap.php';

$data = require 'config/database.php';
$appConfig = require 'config/app.config.php';

$router = new Router($appConfig['routes']);
$arrController = $router->dispatch();
$controllerParams = $arrController[2] ?? [];

$conn = (DbFactory::create($data))->getConn();

$controllerClass = $arrController[0];
$method = $arrController[1];

$controller = new $controllerClass($conn);
$controller->$method(...$controllerParams);

if ($controller instanceof BaseController) {
    $controller->display();
}
