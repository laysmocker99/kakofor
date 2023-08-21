<?php

namespace App\Models;

use CodeIgniter\Model;

class ApprenantModel extends Model
{
    protected $table = 'apprenant';
    protected $allowedFields = ['ID_APPRENANT', 'NOM', 'PRENOM', 'EMAIL', 'TELEPHONE', 'ID_SESSION', 'ID_VILLE'];

    public function getApprenant($id = false)
    {
        if ($id === false) {
            // return $this->findAll();
            $db = db_connect();
            $RQT = 'SELECT ap.ID_APPRENANT, ap.NOM, ap.PRENOM, ap.EMAIL, ap.TELEPHONE, vi.VILLE, fo.NOM AS FORMATION, se.DATE_DEBUT
            FROM `apprenant` ap
            INNER JOIN ville vi ON vi.id_ville = ap.ID_VILLE
            INNER JOIN session se ON se.ID_SESSION = ap.ID_SESSION
            INNER JOIN formation fo ON fo.ID_FORMATION = se.ID_FORMATION';
            return ($this->db->query($RQT)->getResult());
        }

        return $this->where(['id_apprenant' => $id])->first();
    }

    public function putApprenant($dt)
    {
        $this->insert($dt);
    }

    public function updApprenant($dt)
    {
        $this->update(array('id_apprenant' => $dt['id']));
    }
}
