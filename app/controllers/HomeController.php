<?php

namespace Mervy\SimpleRouteWithPhp\controllers;

class HomeController
{
    public function index($params)
    {
        $data = [
            'title' => 'Página Inicial',
            'name' => 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br',
            'params' => $params
        ];


        return Controller::view('home', $data);
    }

    public function getParams($params)
    {
        $data = [
            'title' => 'Página Inicial',
            'name' => 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br',
            'params' => $params
        ];        

        return Controller::view('home', $data);
    }
}
