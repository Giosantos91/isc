<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Valor extends CI_Model
{

    public function getDis($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getEst($id_dis)
    {

        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->join('estudante', 'estudante.id_estudante = kps.id_estudante', 'left');
        $this->db->where('orario.id_dis', $id_dis);
        $this->db->where('estudante.status', 'Aktivu');
        $this->db->order_by('nre', 'ASC');
        $query = $this->db->get();
        return $query;
    }

   
}

/* End of file M_Valor.php */
