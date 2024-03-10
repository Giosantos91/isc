<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Kps extends CI_Model
{
    public function get_kps($id_departamentu)
    {

        $this->db->select('*');
        $this->db->from('orario');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->join('departamentu', 'departamentu.id_departamentu = orario.id_departamentu', 'left');
        $this->db->where('orario.id_departamentu', $id_departamentu);
       $this->db->order_by('id_semester', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function viewkps($id_estudante)
    {
        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->where('id_estudante', $id_estudante);
        $this->db->order_by('sks', 'ASC');
        $this->db->where('status', 'aktivu');
        $query = $this->db->get();
        return $query;
    }

    public function viewkpslaaktivu($id_estudante)
    {
        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->where('id_estudante', $id_estudante);
        $this->db->order_by('sks', 'ASC');
        $this->db->where('status', 'laaktivu');
        $query = $this->db->get();
        return $query;
    }

    public function viewkre($id_estudante)
    {
        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->where('id_estudante', $id_estudante);
        $this->db->order_by('sks', 'ASC');
        $this->db->where('status', 'aktivu');
        $query = $this->db->get();
        return $query;
    }

    public function viewkrelaaktivu($id_estudante)
    {
        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        $this->db->where('id_estudante', $id_estudante);
        $this->db->order_by('sks', 'ASC');
        $this->db->where('status', 'laaktivu');
        $query = $this->db->get();
        return $query;
    }


    public function viewsmst()
    {
        $this->db->select('*');
        $this->db->from('kps');
        $this->db->join('orario', 'orario.id_orario = kps.id_orario', 'left');
        $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        // $this->db->get_where('id_semester', $id_semester);
        $this->db->order_by('sks', 'ASC');
        $query = $this->db->get();
        return $query;
    }



    function aumentakps($data)
    {

        $this->db->insert('kps', $data);
    }

    function detailkps($id_estudante)
    {
        $query = "SELECT `kps`.*,`estudante`.`nre`, `estudante`.`naran_estudante`, `estudante`.`sexo`,`disiplina`.`kode_disiplina`,`disiplina`.`disiplina`,`disiplina`.`sks`
        FROM `kps` 
        JOIN `estudante`ON `kps`.`id_estudante` = `estudante`.`id_estudante`
        JOIN`disiplina`ON`kps`.`id_dis`=`disiplina`.`id_dis`
        WHERE`kps`.`id_estudante`=$id_estudante
        ORDER BY`kps`.`id_estudante`";
        return $this->db->query($query)->row_array();
    }

    function hamoskps($data)
    {
        $this->db->where('id_kps', $data['id_kps']);
        $this->db->delete('kps', $data);
    }

    function hadiavalor($data)
    {
        $this->db->where('id_kps', $data['id_kps']);
        $this->db->update('kps', $data);
    }
}

/* End of file M_Kps.php */
