<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index(): string {
        return view('master');
    }

    public function home(): string {
        return view('/home/home');
    }

    public function assistents(): string {
        return view('/assistent/assistents');
    }

    public function createAssistent(): string {
        return view('/design/floating_right_component');
    }
}
