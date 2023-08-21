<?php

namespace App\Models;

use CodeIgniter\Model;

class VilleModel extends Model
{
    protected $table = 'ville';
    protected $allowedFields = ['ID_Ville', 'NOM', 'CODE_POSTAL'];


    public function getVille($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['ID_VILLE' => $id])->first();
    }
}
