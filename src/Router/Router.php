<?php
/**
 * Author: Vehsamrak
 * Date Created: 19.01.16 22:28
 */

namespace Router;

use Framework\AbstractController;

class Router
{

    public function run()
    {
        $action = null;

        if (isset($_SERVER['PATH_INFO'])) {
            $routes = explode('/', $_SERVER['PATH_INFO']);

            $route = ucfirst(strtolower($routes[1]));
            $action = strtolower($routes[2]);
        } else {
            $route = 'Index';
        }

        $controllerName = 'Controller\\' . $route . 'Controller';

        /** @var AbstractController $controller */
        $controller = new $controllerName;

        return $controller->processAction($action);
    }
}
