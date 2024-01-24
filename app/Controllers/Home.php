<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('master');
    }

    public function home(): string
    {
        return view('/home/home');
    }
}
