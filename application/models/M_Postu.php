<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Postu extends CI_Model {

    function get_postu()
    {
        $this->db->from('postu');
        $this->db->select('postu.*, munisipiu.id_munisipiu AS id_munisipiu, munisipiu.munisipiu');
        $this->db->join('munisipiu', 'postu.id_munisipiu = munisipiu.id_munisipiu');
        $this->db->order_by('id_postu', 'ASC');
        return $this->db->get()->result();
    }

    public function aumentapst($data)
    {
        $this->db->insert('postu', $data);
    }

}

/* End of file M_Postu.php */
