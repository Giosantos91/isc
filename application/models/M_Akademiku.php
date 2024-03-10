<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Akademiku extends CI_Model
{

    function get_akad()
    {
        $this->db->select('*');
        $this->db->from('ta');
        return $this->db->get()->result();
    }

    function aumentaakad($data)
    {
        $this->db->insert('ta', $data);
    }

    function get_detail($id_tn_akad)
    {
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->where('id_tn_akad', $id_tn_akad);
        return $this->db->get()->row();
    }
    function hadiads($data)
    {
        $this->db->where('id_tn_akad', $data['id_tn_akad']);
        $this->db->update('ta', $data);
    }

    function hamosds($data)
    {
        $this->db->where('id_tn_akad', $data['id_tn_akad']);
        $this->db->delete('ta', $data);
    }
}

/* End of file M_Akademiku.php */
