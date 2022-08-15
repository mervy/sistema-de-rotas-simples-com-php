<?php

namespace Mervy\SimpleRouteWithPhp\controllers;

class HomeController
{
    public function index($params)
    {
        $data = [
            'nome'=> 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br'
        ];
        
        var_dump($params);

        return Controller::view('home', $data);
    }
}
