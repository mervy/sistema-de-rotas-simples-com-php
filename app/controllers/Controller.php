<?php

namespace Mervy\SimpleRouteWithPhp\controllers;

use Exception;
use League\Plates\Engine;

class Controller
{
    public static function view(string $view, array $data = [])
    {
        $viewsPath = dirname(__FILE__, 2) . "/views";

        if (!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . '.phtml')) {
            throw new Exception("This {$view} not exists!");
        }

        //Caso use extensão tpl
        $templates = new Engine($viewsPath, 'phtml');
   
        echo $templates->render($view, $data);
    }
}
