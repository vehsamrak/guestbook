<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 21:34
 */

const BASE_DIRECTORY = __DIR__;

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($className) {
    $className = str_replace("\\", "/", $className);
    $namespace = str_replace("\\", "/", __NAMESPACE__) ?: '/';
    $class = BASE_DIRECTORY . "/src/" . $namespace . $className . ".php";

    if (file_exists($class)) {
        include_once($class);
    }
});

$router = new Router\Router();
$controller = $router->run();
