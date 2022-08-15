<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';
require '../routes/router.php';

try {
    //Pegando o path em $uri e o método em $request
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request =  $_SERVER['REQUEST_METHOD'];


    //Verifica se existe o GET ou POST
    if (!isset($router[$request])) {
        throw new Exception("The method #{$request}# does not exist in route");
    }

    //Verifica se existe o path [/products se existe products]
    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception("The route #{$uri}# does not exist");
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    echo $e->getMessage();
}
