<?php

//use Exception;

function load(string $controller, string $action)
{

    try {
        //Se o controller existir
        $controllerNamespace = "Mervy\SimpleRouteWithPhp\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("The controller #{$controller}# does not exist");
        }

        $controllerInstance = new $controllerNamespace();

        //Se o método existir
        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("Action #{$action}# in controller #{$controller}# does not exist");
        }

        $controllerInstance->$action();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/' => load('HomeController', 'index'),
        '/contact' => load('ContactController', 'index')
    ],
    'POST' => [
        '/contact' => load('ContactController', 'store')
    ]
];
