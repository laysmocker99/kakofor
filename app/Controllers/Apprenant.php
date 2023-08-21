<?php

namespace App\Controllers;

use App\Models\ApprenantModel;
use App\Models\VilleModel;

class Apprenant extends BaseController
{
    public function index()
    {
        $model = new ApprenantModel();
        $data['apprenant'] = $model->getApprenant();
        $data['title'] = 'Liste des apprenants';

        return view('apprenant/index', $data);
        return view('templates/header', $data)
            . view('apprenant/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = new ApprenantModel();
        $data = [
            'apprenant' => $model->getApprenant($id),
            'title' => 'Fiche de l\'apprenant',
        ];
        return view('templates/header', $data)
            . view('apprenant/view')
            . view('templates/footer');
    }

    public function ajouter()
    {
        $method = $this->request->getMethod();
        if ($method == 'get') {
            $modelVill = model(VilleModel::class);
            $modelSess = model(SessionModel::class);
            $data = [
                'title' => 'Ajouter un apprenant',
                'ville' => $modelVill->getVille(),
                'session' => $modelSess->getSession(),

            ];
            return view('templates/header', $data)
                . view('apprenant/ajouter')
                . view('templates/footer');
        } elseif ($method == 'post') {
            $data = [
                'ID_APPRENANT' => '',
                'NOM' => $this->request->getPost('nom'),
                'PRENOM' => $this->request->getPost('prenom'),
                'STATUT' => $this->request->getPost('statut'),
                'EMAIL' => $this->request->getPost('email'),
                'TELEPHONE' => $this->request->getPost('telephone'),
            ];
            $model = new ApprenantModel();
            $model->putapprenant($data);
        }
        return redirect()->to('/apprenant');
    }

    public function modifier($id = false)
    {
        // recupérer les donnée de l'apprenant
        $model = new ApprenantModel();
        $modelVill = model(VilleModel::class);
        $modelSess = model(SessionModel::class);
        $data = [
            'title' => 'Modifier l\' apprenant',
            'ville' => $modelVill->getVille(),
            'session' => $modelSess->getSession(),
            'apprenant' => $model->getApprenant($id),
        ];
        // afficher le formulaire de modification
        return view('templates/header', $data)
            . view('apprenant/modifier')
            . view('templates/footer');
    }

    public function supprimer($id)
    {
        $model = new ApprenantModel();
        $model->delapprenant($id);

        return redirect()->to('apprenant');
    }
}
