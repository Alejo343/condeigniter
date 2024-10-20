<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('util_helper');
        $data['token'] = generateToken();
        return view('welcome_message', $data);
    }
}
