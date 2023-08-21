<?php

namespace App\Controllers;

use App\Models\FormationModel;

use function PHPSTORM_META\map;

class Formation extends BaseController
{
    public function index()
    {
        $model = new FormationModel();

        $data = [
            'formation'  => $model->getFormation(),
            'title' => 'Liste des formation',
        ];

        return view('templates/header', $data)
            . view('formation/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = model(FormationModel::class);

        $data = [
            'formation'  => $model->getFormation($id),
            'title' => 'Fiche de l\'formation',
        ];
        return view('templates/header', $data)
            . view('formation/view')
            . view('templates/footer');
    }

    public function ajouter()
    {
        $method = $this->request->getMethod();
        if ($method == 'get') {
            $data = [
                'title' => 'Ajouter une formation',
            ];

            return view('templates/header', $data)
                . view('formation/ajouter')
                . view('templates/footer');
        } elseif ($method == 'post') {
            $data = [
                'ID_FORMATION' => '',
                'NOM' => $this->request->getPost('nom'),
                'CODE' => $this->request->getPost('code'),
            ];

            $model = new FormationModel();
            $model->putformation($data);
            // Redirection vers la page "index"
            return redirect()->to('formation');
        }
    }


    public function supprimer($id)
    {
        $model = new FormationModel();
        $model->delformation($id);

        return redirect()->to('formation');
    }
}
