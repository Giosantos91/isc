<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Disiplina extends CI_Model {

    function getDis()
    {
        $this->db->from('disiplina');
        $this->db->select('disiplina.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu, semester.id_semester AS id_semester, semester.semester');
        $this->db->join('fakuldade', 'disiplina.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'disiplina.id_departamentu = departamentu.id_departamentu');
        $this->db->join('semester', 'disiplina.id_semester = semester.id_semester');
        
        $this->db->order_by('disiplina', 'ASC');
        return $this->db->get()->result();
    }
    function aumentadis($data)
    {
        $this->db->insert('disiplina', $data);
    }
    function get_detail($id_dis)
    {
        $this->db->from('disiplina');
        $this->db->select('disiplina.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
        $this->db->join('fakuldade', 'disiplina.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'disiplina.id_departamentu = departamentu.id_departamentu');
        $this->db->where('id_dis', $id_dis);
        return $this->db->get()->row();
    }

    function hadiadis($data)
    {
        $this->db->where('id_dis', $data['id_dis']);
        $this->db->update('disiplina', $data);
    }
    function hamosdis($data)
    {
        $this->db->where('id_dis', $data['id_dis']);
        $this->db->delete('disiplina', $data);
    }
    function importdis($data)
    {
        $this->db->insert_batch('disiplina', $data);
    }
}

/* End of file M_Disiplina.php */
