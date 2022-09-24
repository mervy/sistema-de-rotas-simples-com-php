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

        //Com (object) $_REQUEST posso pegar query string
        // como por exemplo ?id=4
        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/' => fn()=>load('HomeController', 'index'),
        '/contact' => fn()=>load('ContactController', 'index')
    ],
    'POST' => [
        '/contact' => fn()=>load('ContactController', 'store'),
        '/getParams' => fn()=>load('HomeController', 'getParams')
    ]
];
