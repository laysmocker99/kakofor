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

        // Afficher la vue avec en-tête et pied-de-page
 return view('templates/header', $data)
    }
}
