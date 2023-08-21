<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Accueil extends BaseController
{

    public function autoriser()
 {
 // Initialiser la session pour le passage de variables
 $this->session = \Config\Services::session();
 // Récupérer les données saisies dans le formulaire
 $credentials = [
 'email' => $this->request->getPost('email'),
 'password' => $this->request->getPost('mdp')
 ];
 // Tentative de connexion avec ces identifiants
 $loginAttempt = auth()->attempt($credentials);

 if (! $loginAttempt->isOK()) {
 // Revenir et informer en cas de problème
 return redirect()->back()->with('error', $loginAttempt->reason());
 }

 }

    public function index()
    {
        return view('dashboard/index');
    }
    
    public function view($page = 'home')
    {
        // Rchercher la page demandée dans le dossier Views
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Pas de page pour ce qui est demandé
            throw new PageNotFoundException($page);
        }

        // Données transférées à la vue demandée
        $data['title'] = ucfirst($page); // Capitalize the first letter

        // Afficher la vue avec en-tête et pied-de-page
        return view('templates/header', $data)
            . view($page)
            . view('templates/footer');
    }
}