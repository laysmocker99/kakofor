<?php

namespace App\Controllers;

use App\Models\ApprenantModel;

class Apprenant extends BaseController
{
    public function index()
    {
        $model = new ApprenantModel();

        $data = [
            'apprenants' => $model->getApprenants(),
            'title' => 'liste des apprenants',
        ];

        return view('templates/header', $data)
            . view('apprenant/index', $data)
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = new ApprenantModel();

        $data = [
            'apprenant' => $model->getApprenant($id),
            'title' => 'Fiche de l\'apprenant'
        ];

        return view('templates/header', $data)
            . view('apprenant/index', $data)
            . view('templates/footer');
    }
}
