<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function index()
    {
        $data['titlu'] = 'Menu | Menu';
        $menu = $this->M_Menu->get_menu();
        $dadus = array('menu' => $menu);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('menu/mn/menu', $dadus);
        $this->load->view('template/footer'); 
    }
    public function aumentamn()
    {

        $this->form_validation->set_rules('menu', 'Menu', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Menu | Menu';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('menu/mn/aumentamn');
            $this->load->view('template/footer');
        } else {
            $data = [
                'menu' => htmlspecialchars($this->input->post('menu'))
            ];
            $this->M_Menu->aumenta_menu($data);
            $this->session->set_flashdata('flash', 'Halot');
            redirect('menu');
        }
    }

    public function hadiamn($id_menu)
    {

        $this->form_validation->set_rules('menu', 'Menu', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Menu | Menu';
            $menu = $this->M_Menu->detail($id_menu);
            $dadus = array('menu' => $menu);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('menu/mn/hadiamn', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_menu' => $id_menu,
                'menu' => htmlspecialchars($this->input->post('menu')),
            ];
            $this->M_Menu->hadiamn($data);
            $this->session->set_flashdata('flash', 'Menu Halot');
            redirect('menu');
        }
    }

    public function hamosmn($id_menu)
    {
        $data = array('id_menu' => $id_menu);
        $this->M_Menu->hamosmn($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Hamos ');
        redirect('menu');
    }

    public function submenu()
    {
        $submenu = $this->M_Menu->get_submenu();
        $dadus = array('submenu' => $submenu);
        $data['titlu'] = 'SubMenu | SubMenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('menu/submn/submenu', $dadus);
        $this->load->view('template/footer');
    }


    public function aumentasub()
    {
        $this->form_validation->set_rules('id_menu', 'Menu', 'trim|required');
        $this->form_validation->set_rules('titlu', 'Titlu', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');
        $this->form_validation->set_rules('aktif', 'Active', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['titlu'] = 'SubMenu | SubMenu';
            $menu = $this->M_Menu->get_menu();
            $dadus = array('menu' => $menu);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('menu/submn/aumentasub', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_menu' => htmlspecialchars($this->input->post('id_menu', true)),
                'titlu' => htmlspecialchars($this->input->post('titlu', true)),
                'url' => htmlspecialchars($this->input->post('url', true)),
                'icon' => htmlspecialchars($this->input->post('icon', true)),
                'aktif' => htmlspecialchars($this->input->post('aktif', true)),

            ];
            $this->M_Menu->aumentasub($data);
            $this->session->set_flashdata('flash', 'Sub Menu Halot');
            redirect('menu/submenu');
        }
    }

    public function hamossub($id_sub_menu)
    {
        $data = array('id_sub_menu' => $id_sub_menu);
        $this->M_Menu->hamossub($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Hamos ');
        redirect('menu/submenu');
    }

}

/* End of file Menu.php */
