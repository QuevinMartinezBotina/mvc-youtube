<?php

require "system/config.php";
require "system/core/autoload.php";

$router = new Router();

echo '<prev>';
print_r($router->getUri());
echo '</prev>';

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();


echo "Controlador: {$controller}";
echo "Metodo: {$method}";
echo "Parametro: {$param}";

require PATH_CONTROLLERS . "{$controller}/{$controller}controller.php";

$controller = new $controller();
$controller->exec();
