<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Munisipiu extends CI_Model {

    function get_munisipiu()
    {
        $this->db->select('*');
        $this->db->from('munisipiu');
        return $this->db->get()->result();
    }

    public function aumentamsp($data)
    {
        $this->db->insert('munisipiu', $data);
    }

    function get_detail($id_munisipiu)
    {
        $this->db->select('*');
        $this->db->from('munisipiu');
        $this->db->where('id_munisipiu', $id_munisipiu);
        return $this->db->get()->row();
    }
    function hadiamsp($data)
    {
        $this->db->where('id_munisipiu', $data['id_munisipiu']);
        $this->db->update('munisipiu', $data);
    }

    function hamosmsp($data)
    {
        $this->db->where('id_munisipiu', $data['id_munisipiu']);
        $this->db->delete('munisipiu', $data);
    }
 

}

/* End of file M_Munisipiu.php */
