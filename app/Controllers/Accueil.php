<?php

namespace App\Controller;

use CodeIgniter\Exceptions\PageNotFoundException;

class Accueil extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // Data transferred to the requested view
        $data['title'] = ucfirst($page);
    }
}
