<?php

namespace App\Controllers;

use App\Models\FormateurModel;
use CodeIgniter\Controller;

class Formateur extends Controller
{
    public function index()
    {
        $model = new FormateurModel();

        $data = [
            'formateurs' => $model->getFormateur(),
            'title' => 'Liste des Formateurs',
        ];


        return view('templates/header', $data)
            . view('formateur/index')
            . view('templates/footer');
    }


    public function view($id = null)
    {
        $model = new FormateurModel();

        $data = [
            'formateur' => $model->getFormateur($id),
            'title' => 'Fiche du formateur',
        ];

        return view('templates/header', $data)
            . view('formateur/view')
            . view('templates/footer');
    }

    public function supprimer($id)
    {
        $model = new FormateurModel();
        $model->delformateur($id);

        return redirect()->to('formateur');
    }
}
