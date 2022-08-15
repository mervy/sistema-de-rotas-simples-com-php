<?php

namespace Mervy\SimpleRouteWithPhp\controllers;

class ContactController
{
    public function index()
    {
        $data = [
            'nome' => 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br'
        ];
        return Controller::view('contact', $data);
    }

    public function store($params)
    {
        echo "store do ContactController<br>";
        echo $params->email;

        echo "<pre>";
        print_r($params);
        echo "</pre>";
    }
}
