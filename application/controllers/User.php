<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['titlu'] = 'User || Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/dashboard');
        $this->load->view('template/footer');
    }

    public function estudante() 
    {
        $data['titlu'] = 'User || Estudante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $estudante = $this->M_Estudante->get_estudante();
        // $aktivu = $this->M_Estudante->aktivu();

        // $feto = $this->M_Estudante->feto();
        // $mane = $this->M_Estudante->mane();

        $dadus = array(
            // 'aktivu' => $aktivu,
            'estudante' => $estudante
            // 'feto' => $feto,
            // 'mane' => $mane,
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/estudante/estudante',$dadus);
        $this->load->view('template/footer');
    }

  public function detail($id_estudante)
    {
        $data['titlu'] = 'User || Detail Estundante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $estudante = $this->M_Estudante->get_detail($id_estudante);
        $dadus = array(

            'estudante' => $estudante
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/estudante/detail', $dadus);
        $this->load->view('template/footer');
    }

}

/* End of file User.php */