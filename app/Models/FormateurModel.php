<?php

namespace App\Models;

use CodeIgniter\Model;

class FormateurModel extends Model
{
    protected $table = 'formateur';
    protected $primaryKey = 'ID_FORMATEUR'; // La clé primaire doit correspondre à celle de votre table

    protected $allowedFields = ['NOM', 'PRENOM', 'EMAIL', 'TELEPHONE'];

    public function getFormateur($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}
