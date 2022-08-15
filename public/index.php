<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';
//require '../routes/router.php';

try {
    //Pegando a path 
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    //Pegando o método
    $request =  $_SERVER['REQUEST_METHOD'];
//Se não existe a rota
if(!isset($router[$request])){
    throw new Exception("The route #{$uri}# does not exist");
}
  
} catch (Exception $e) {
    echo $e->getMessage();
}

//https://youtu.be/h7K-KUZ3Rvw?t=1193 continuar daqui
