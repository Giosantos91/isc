<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Menu extends CI_Model
{

    function get_menu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        return $this->db->get()->result();

//         $query = "SELECT `sub_menu`.*, `menu`.`menu`
//         FROM `sub_menu` JOIN `menu`
//         ON `sub_menu`.`id_menu` = `menu`.`id_menu`
//       ";
// return $this->db->query($query)->result_array();

       
    }

    function aumenta_menu($data)
    {
        $this->db->insert('menu', $data);
    }

    function detail($id_menu)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('id_menu', $id_menu);
        return $this->db->get()->row();
    }
    function hadiamn($data)
    {
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->update('menu', $data);
    }

    function hamosmn($data)
    {
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->delete('menu', $data);
    }
    // ======================submenu===============
    function get_submenu()
    {
        $this->db->from('sub_menu');
        $this->db->select('sub_menu.*, menu.id_menu AS id_menu, menu.menu');
        $this->db->join('menu', 'sub_menu.id_menu = menu.id_menu');
        $this->db->order_by('id_sub_menu', 'ASC');
        return $this->db->get()->result();
    }

    function aumentasub($data)
    {
        $this->db->insert('sub_menu', $data);
    }

    function detailsub($id_sub_menu)
    {
        $this->db->from('sub_menu');
        $this->db->select('sub_menu.*, menu.id_menu AS id_menu, menu.menu');
        $this->db->join('menu', 'sub_menu.id_menu = menu.id_menu');
        $this->db->where('id_sub_menu', $id_sub_menu);
        return $this->db->get()->row();
    }
    function hamossub($data)
    {
        $this->db->where('id_sub_menu', $data['id_sub_menu']);
        $this->db->delete('sub_menu', $data);
    }
}

/* End of file M_Menu.php */
