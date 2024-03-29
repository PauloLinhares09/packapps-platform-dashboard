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
        return view('/assistent/new_assistent');
    }

    public function playground(): string {
        return view('/assistent/playground');
    }

    public function apikey(): string {
        return view('/apikey/apikeys');
    }

    public function createApikey(): string {
        return view('/apikey/new_apikey');
    }

    public function leads(): string {
        return view('/temperature/leads');
    }

    public function clients(): string {
        return view('/temperature/clients');
    }

    public function campaigns(): string {
        return view('/temperature/campaigns');
    }

    public function sendMessage(): string {
        return view('/temperature/sendMessage');
    }


}
