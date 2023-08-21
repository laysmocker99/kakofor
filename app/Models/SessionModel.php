<?php

namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table = 'session';

    public function getSession($id = false)
    {
        if ($id === false) {
            $RQT = 'SELECT se.DATE_DEBUT, se.DATE_FIN, se.ID_SESSION, fo.NOM as Formation FROM session se inner join formation fo on se.ID_FORMATION = fo.ID_FORMATION';
            return $this->db->query($RQT)->getResult('array');
        }

        return $this->where(['ID_SESSION' => $id])->first();
    }
}
