<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Fakuldade extends CI_Model
{

    function get_fakuldade()
    {
        $this->db->select('*');
        $this->db->from('fakuldade');
        return $this->db->get()->result();
    }

    public function aumentafak($data)
    {
        $this->db->insert('fakuldade', $data);
    }

    function get_detail($id_fakuldade)
    {
        $this->db->select('*');
        $this->db->from('fakuldade');
        $this->db->where('id_fakuldade', $id_fakuldade);
        return $this->db->get()->row();
    }
    function hadiafak($data)
    {
        $this->db->where('id_fakuldade', $data['id_fakuldade']);
        $this->db->update('fakuldade', $data);
    }

    function hamosfak($data)
    {
        $this->db->where('id_fakuldade', $data['id_fakuldade']);
        $this->db->delete('fakuldade', $data);
    }
 
}

/* End of file M_fakuldade.php */
