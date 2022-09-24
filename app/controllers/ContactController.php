<?php

namespace Mervy\SimpleRouteWithPhp\controllers;

class ContactController
{
    public function index()
    {
        $data = [
            'title' => 'Contact',
            'nome' => 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br'
        ];
        return Controller::view('contact', $data);
    }

    public function store($params)
    {
        $data = [
            'title' => 'Store do Contact',
            'nome' => 'Rogério Soares',
            'email' => 'rgrsoares@yahoo.com.br'
        ];

        return Controller::view('contact', $data);
    }
}
