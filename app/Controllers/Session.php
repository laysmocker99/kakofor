<?php

namespace App\Controllers;

use App\Models\SessionModel;

use function PHPSTORM_META\map;

class Session extends BaseController
{
    public function index()
    {
        $model = new SessionModel();

        $data = [
            'session'  => $model->getSession(),
            'title' => 'Liste des session',
        ];

        return view('templates/header', $data)
            . view('session/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = model(SessionModel::class);

        $data = [
            'session'  => $model->getSession($id),
            'title' => 'Fiche de l\'session',
        ];
        return view('templates/header', $data)
            . view('session/view')
            . view('templates/footer');
    }

    public function ajouter()
    {
        $method = $this->request->getMethod();
        if ($method == 'get') {
            $data = [
                'title' => 'Ajouter une session',
            ];

            return view('templates/header', $data)
                . view('session/ajouter')
                . view('templates/footer');
        } elseif ($method == 'post') {
            $data = [
                'ID_SESSION' => '',
                'ID_FORMATION' => $this->request->getPost('formation'),
                'DATE_DEBUT' => $this->request->getPost('debut'),
                'DATE_FIN' => $this->request->getPost('fin'),
            ];

            $model = new SessionModel();
            $model->putsession($data);
            // Redirection vers la page "index"
            return redirect()->to('session');
        }
    }


    public function supprimer($id)
    {
        $model = new SessionModel();
        $model->delsession($id);

        return redirect()->to('session');
    }
}
