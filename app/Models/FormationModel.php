<?php

namespace App\Models;

use CodeIgniter\Model;

class FormationModel extends Model
{
    protected $table = 'formation';
    protected $allowedFields = ['ID_FORMATION', 'NOM', 'CODE'];


    public function getFormation($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_formation' => $id])->first();
    }

    public function putformation($dt)
    {
        $this->insert($dt);
    }

    public function delformation($id)
    {
        $this->where(['ID_FORMATION' => $id])->delete();
    }
}
