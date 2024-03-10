<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['titlu'] = 'Adminitrator || Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $estudante = $this->M_Grafik->totalestudante();
        $dosente = $this->M_Grafik->totaldosente();
        $tfakuldade = $this->M_Grafik->totalfakuldade();
        $tdepartamentu = $this->M_Grafik->totaldepartamentu();
        $totaldep = $this->M_Departamento->totaldep();
        $depestu = $this->M_Departamento->depestu();
        $departamento = $this->M_Departamento->get_departamento();
        $total = $this->M_Dadus->get_dadus();
        $dadus = array(
            'estudante'=>$estudante,
            'dosente'=>$dosente,
            'tfakuldade'=>$tfakuldade,
            'tdepartamentu'=>$tdepartamentu,
          
            'departamento'=>$departamento,
            'total'=>$total,
            'totaldep'=>$totaldep,
           'depestu'=>$depestu,
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/dashboard', $dadus);
        $this->load->view('template/footer');
    }

   public function munisipiu()
   {
    $data['titlu'] = 'Adminitrator || Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $munisipiu = $this->M_Munisipiu->get_munisipiu();
    $dadus = array(
        'munisipiu'=>$munisipiu,
        
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('administrator/munisipiu/munisipiu', $dadus);
    $this->load->view('template/footer');
   }

   public function aumentamsp()
   {
    $this->form_validation->set_rules(
        'munisipiu',
        'munisipiu',
        'trim|required|is_unique[munisipiu.munisipiu]',
        ['is_unique' => 'Munisipiu Nee registo tiha ona']
    );
    $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
    if ($this->form_validation->run() == false) {
        $data['titlu'] = 'Administrator || Aumenta Munisipiu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/munisipiu/aumentamsp');
        $this->load->view('template/footer');
    } else {
        $data = [
            'munisipiu' => htmlspecialchars($this->input->post('munisipiu', true))
        ];
        $this->M_Munisipiu->aumentamsp($data);
        $this->session->set_flashdata('flash', 'Munisipiu Rai ho Succesu');

        redirect('administrator/munisipiu', 'refresh');
    }
   }

   public function hamosmsp ($id_munisipiu)
   {
    $data = array('id_munisipiu' => $id_munisipiu);
    $this->M_Munisipiu->hamosmsp($data); // Panggil fungsi delete dari model
    $this->session->set_flashdata('flash', 'Departamento Hamos');
    return redirect($_SERVER['HTTP_REFERER']);
   }

   public function postu()
   {
    $data['titlu'] = 'Adminitrator || Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $postu = $this->M_Postu->get_postu();
    $dadus = array(
        'postu'=>$postu,
        
    );
    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('administrator/postu/postu', $dadus);
    $this->load->view('template/footer');
   }

   public function aumentapst()
   {
    $this->form_validation->set_rules('id_munisipiu', 'Munisipiu', 'trim|required');
    $this->form_validation->set_rules(
        'postu',
        'Postu',
        'trim|required|is_unique[postu.postu]',
        ['is_unique' => 'Postu Nee registo tiha ona']
    );
    $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
    if ($this->form_validation->run() == false) {
        $data['titlu'] = 'Administrator || Aumenta Postu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $munisipiu = $this->M_Munisipiu->get_munisipiu();
        $dadus = array('munisipiu' => $munisipiu);
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/postu/aumentapst', $dadus);
        $this->load->view('template/footer');
    } else {
        $data = [
            'id_munisipiu' => htmlspecialchars($this->input->post('id_munisipiu', true)),
            'postu' => htmlspecialchars($this->input->post('postu', true))
        ];
        $this->M_Postu->aumentapst($data);
        $this->session->set_flashdata('flash', 'Postu Rai ho Succesu');

        redirect('administrator/postu', 'refresh');
    }
   }

    public function data_fakuldade($id_fakuldade)
    {
        $this->form_validation->set_rules('departamentu', 'Departamento', 'trim|required');
        $this->form_validation->set_rules('grau', 'Grau', 'trim|required');
   
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Lista Departamento';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $detail = $this->M_Fakuldade->get_detail($id_fakuldade);
            $disdep = $this->M_Departamento->getData($id_fakuldade)->result();
            $dadus = array(
                'detail' => $detail,
               'disdep' => $disdep,
            );
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar',$data);
            $this->load->view('administrator/fakuldade/data_fakuldade', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_fakuldade' => $id_fakuldade,
                'departamentu' => htmlspecialchars($this->input->post('departamentu')),
                'grau' => htmlspecialchars($this->input->post('grau')),
               
                
            ];

            $this->db->insert('departamentu', $data);

            $this->session->set_flashdata('flash', 'Tinan Akademiku halot ho Succesu');
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function hamosdata_fakuldade($id_departamentu)
    {
        $data = array('id_departamentu' => $id_departamentu);
        $this->M_Departamento->hamosdep($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Departamento Hamos');
        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function fakuldade()
    {
        $data['titlu'] = 'Administrator || Fakuldade';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $fakuldade = $this->M_Fakuldade->get_fakuldade();
        $dadus = array('fakuldade' => $fakuldade);
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/fakuldade/fakuldade',$dadus);
        $this->load->view('template/footer');
    }

    public function aumentafk()
    {

        $this->form_validation->set_rules(
            'fakuldade',
            'fakuldade',
            'trim|required|is_unique[fakuldade.fakuldade]',
            ['is_unique' => 'Fakuldade Nee registo tiha ona']
        );
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Fakuldade';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('administrator/fakuldade/aumentafk');
            $this->load->view('template/footer');
        } else {
            $data = [
                'fakuldade' => htmlspecialchars($this->input->post('fakuldade', true))
            ];
            $this->M_Fakuldade->aumentafak($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/fakuldade', 'refresh');
        }
    }

    public function hadiafak($id_fakuldade)
    {

        $this->form_validation->set_rules('fakuldade', 'fakuldade', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Fakuldade';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $fakuldade = $this->M_Fakuldade->get_detail($id_fakuldade);
            $dadus = array(

                'fakuldade' => $fakuldade
            );
            $this->load->view('template/header_ad', $data);
            $this->load->view('template/topbar_ad', $data);
            $this->load->view('template/sidebar_ad', $data);
            $this->load->view('administrator/fakuldade/hadiafak', $dadus);
            $this->load->view('template/footer_ad');
        } else {
            $data = [
                'id_fakuldade' => $id_fakuldade,
                'fakuldade' => htmlspecialchars($this->input->post('fakuldade', true))
            ];
            $this->M_Fakuldade->hadiafak($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/fakuldade', 'refresh');
        }
    }

    public function hamosfak($id_fakuldade)
    {
        $data = array('id_fakuldade' => $id_fakuldade);
        $this->M_Fakuldade->hamosfak($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Fakuldade Hamos');
        redirect('administrator/fakuldade');
    }

    // Departamentu

    public function departamento()
    {

        $data['titlu'] = 'Administrator || Departamento';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $departamento = $this->M_Departamento->get_departamento();
        $dadus = array('departamento' => $departamento);
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/departamento/departamento', $dadus);
        $this->load->view('template/footer');
    }

    public function aumentadp()
    {

        $this->form_validation->set_rules('id_fakuldade', 'Fakuldade', 'trim|required');
        $this->form_validation->set_rules(
            'departamentu',
            'Departamento',
            'trim|required|is_unique[departamentu.departamentu]',
            ['is_unique' => 'Departamento Nee registo tiha ona']
        );
        $this->form_validation->set_rules('grau', 'Grau', 'trim|required');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Departamento';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $fakuldade = $this->M_Fakuldade->get_fakuldade();
            $dadus = array('fakuldade' => $fakuldade);
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('administrator/departamento/aumentadp', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_fakuldade' => htmlspecialchars($this->input->post('id_fakuldade', true)),
                'departamentu' => htmlspecialchars($this->input->post('departamentu', true)),
                'grau' => htmlspecialchars($this->input->post('grau', true))

            ];
            $this->M_Departamento->aumentadep($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/departamento', 'refresh');
        }
    }

    public function hadiadep($id_departamentu)
    {

        $this->form_validation->set_rules('id_fakuldade', 'Fakuldade', 'trim|required');
        $this->form_validation->set_rules('departamentu', 'Departamento', 'trim|required');
        $this->form_validation->set_rules('grau', 'Grau', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Departamento';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $departamentu = $this->M_Departamento->get_detail($id_departamentu);
            $fakuldade = $this->M_Fakuldade->get_fakuldade();
            $dadus = array(
                'departamentu' => $departamentu,
                'fakuldade' => $fakuldade
            );
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('administrator/departamento/hadiadep', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_departamentu' => $id_departamentu,
                'id_fakuldade' => htmlspecialchars($this->input->post('id_fakuldade', true)),
                'departamentu' => htmlspecialchars($this->input->post('departamentu', true)),
                'grau' => htmlspecialchars($this->input->post('grau', true))

            ];
            $this->M_Departamento->hadiadep($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/departamento', 'refresh');
        }
    }

    public function hamosdep($id_departamentu)
    {
        $data = array('id_departamentu' => $id_departamentu);
        $this->M_Departamento->hamosdep($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Departamento Hamos');
        redirect('administrator/departamento');
    }
    // Disiplina
    public function disiplina()
    {
        $data['titlu'] = 'Administrator || Disiplina';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $disiplina = $this->M_Disiplina->getDis();
        $dadus = array('disiplina' => $disiplina);
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/disiplina/disiplina', $dadus);
        $this->load->view('template/footer');
    }

     public function aumentadis()
     {
        $this->form_validation->set_rules('id_fakuldade', 'fakuldade', 'trim|required');
        $this->form_validation->set_rules('id_departamentu', 'Departamento', 'trim|required');
        $this->form_validation->set_rules('kode_disiplina','Kode Disiplina','trim|required|is_unique[disiplina.kode_disiplina]',['is_unique' => 'kode disiplina Nee registo tiha ona']);
        $this->form_validation->set_rules('disiplina','Disiplina','trim|required');
        $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
        $this->form_validation->set_rules('id_semester', 'Semester', 'trim|required');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
            if ($this->form_validation->run() == false) {
        $data['titlu']='Administrator || Aumenta Disiplina';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $fakuldade = $this->M_Fakuldade->get_fakuldade();
        $departamentu = $this->M_Departamento->get_departamento();
        $semester= $this->M_Semester->getSemester();
            $dadus = array(
                'fakuldade' => $fakuldade,
                'departamentu' => $departamentu,
                'semester' => $semester
                );
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('administrator/disiplina/aumentadis', $dadus);
                $this->load->view('template/footer');
              } else {

             $data = [
            'id_fakuldade' => htmlspecialchars($this->input->post('id_fakuldade')),
            'id_departamentu' => htmlspecialchars($this->input->post('id_departamentu')),
            'kode_disiplina' => htmlspecialchars($this->input->post('kode_disiplina')),
            'disiplina' => htmlspecialchars($this->input->post('disiplina')),
            'sks' => htmlspecialchars($this->input->post('sks')),
            'id_semester' => htmlspecialchars($this->input->post('id_semester'))
                ];
            $this->M_Disiplina->aumentadis($data);
            $this->session->set_flashdata('flash', 'Disiplina Halot');
            redirect('administrator/disiplina');
       }
    }
    function getdepart()
    {
        $id = $this->input->post('id');
        $data = $this->M_Departamento->get_depart($id);
        echo json_encode($data);
    }

    public function semester()
    {
        $data['titlu'] = 'Administrator || Estudante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $semester = $this->M_Semester->getSemester();
        
        $dadus = array(
            'semester' => $semester,
        );
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('administrator/semester/semester',$dadus);
                $this->load->view('template/footer');
    }


    public function aumentasemester ()
    {
        $this->form_validation->set_rules(
            'semester',
            'semester',
            'trim|required|is_unique[semester.semester]',
            ['is_unique' => 'semester Nee registo tiha ona']
        );
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Fakuldade';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('administrator/semester/aumentasemester');
            $this->load->view('template/footer');
        } else {
            $data = [
                'semester' => htmlspecialchars($this->input->post('semester', true))
            ];
            $this->M_Semester->aumentasemester($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/semester', 'refresh');
        } 
    }

    public function tinan()
    {
        $data['titlu'] = 'Administrator || Estudante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $tinan = $this->M_Tinan->getTinan();
        
        $dadus = array(
            'tinan' => $tinan,
        );
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('administrator/tinan/tinan',$dadus);
                $this->load->view('template/footer');
    }

    public function aumentatinan()
    {
        $this->form_validation->set_rules('tn_akad', 'Tinan Akademik', 'trim|required|is_unique[ta.tn_akad]',
        ['is_unique' => 'Tinan Akademik Nee registo tiha ona']);
        $this->form_validation->set_rules(
            'status',
            'Status',
            'trim|required'
        );
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Aumenta Tinan Akademiku';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $fakuldade = $this->M_Fakuldade->get_fakuldade();
            $dadus = array('fakuldade' => $fakuldade);
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('administrator/tinan/aumentatinan', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'tn_akad' => htmlspecialchars($this->input->post('tn_akad', true)),
                'status' => htmlspecialchars($this->input->post('status', true)),

            ];
            $this->M_Tinan->aumentatinan($data);
            $this->session->set_flashdata('flash', 'Submenu Rai ho Succesu');

            redirect('administrator/tinan', 'refresh');
        }
     
    }

    public function estudante() 
    {
        $data['titlu'] = 'Administrator || Estudante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $estudante = $this->M_Estudante->get_estudante();
        $aktivu = $this->M_Estudante->aktivu();

        $feto = $this->M_Estudante->feto();
        $mane = $this->M_Estudante->mane();

        $dadus = array(
            'aktivu' => $aktivu,
            'estudante' => $estudante,
            'feto' => $feto,
            'mane' => $mane,
        );
                    $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('administrator/estudante/estudante',$dadus);
                $this->load->view('template/footer');
             
    }

    public function detail($id_estudante)
    {
        $data['titlu'] = 'Administrator || Detail Estundante';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $estudante = $this->M_Estudante->get_detail($id_estudante);
        $dadus = array(

            'estudante' => $estudante
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('administrator/estudante/detail', $dadus);
        $this->load->view('template/footer');
    }


    public function hamosestudante($id_estudante)
    {
        $data = array('id_estudante' => $id_estudante);
        $this->M_Estudante->hamosestudante($data); // Panggil fungsi delete dari model
        $this->session->set_flashdata('flash', 'Departamento Hamos');
        return redirect($_SERVER['HTTP_REFERER']);
    }


    public function data_estudante($id_departamentu)
    {
        $data['titlu'] = 'Administrator || Lista Dadus Estudante';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           
             $detail = $this->M_Departamento->get_detail($id_departamentu);
             $listaest = $this->M_Estudante->getData($id_departamentu)->result();
             $dadus = array(
                'detail' => $detail,
                'listaest' => $listaest,
              
    
        );
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar',$data);
            $this->load->view('administrator/estudante/data_estudante',$dadus);
            $this->load->view('template/footer');
    }

    public function dosente() 
    {
        $data['titlu'] = 'Administrator || Dosente';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $dosente = $this->M_Dosente->get_dosente();
        $dadus = array('dosente' => $dosente );
           $this->load->view('template/header', $data);
           $this->load->view('template/navbar', $data);
           $this->load->view('template/sidebar', $data);
           $this->load->view('administrator/dosente/dosente',$dadus);
           $this->load->view('template/footer');
    }

    public function aumentadst() 
    {
        $this->form_validation->set_rules('nrd', 'Numeru registu dosente', 'trim|required');
        $this->form_validation->set_rules('naran_dosente', 'Naran Dosente', 'trim|required');
        $this->form_validation->set_rules('fatin', 'Fatin Moris', 'trim|required');
        $this->form_validation->set_rules('data_moris', 'Data Moris', 'trim|required');
        $this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
        $this->form_validation->set_rules('hela_fatin', 'Hela fatin', 'trim|required');
        $this->form_validation->set_rules('naturalidade', 'Naturalidade', 'trim|required');
        $this->form_validation->set_rules('estatus_dos', 'Estatus Dosente', 'trim|required');
        $this->form_validation->set_rules('nasionalidade', 'Nasionalidade', 'trim|required');
        $this->form_validation->set_rules('nivel_educacao', 'Nivel Edukasaun', 'trim|required');
        $this->form_validation->set_rules('area_espesialidade', 'Area Espesialidade', 'trim|required');
        $this->form_validation->set_rules('univer_orijin', 'Universidade Orijin', 'trim|required');
        $this->form_validation->set_rules('tinan_hahu', 'Tinan Hahu ', 'trim|required');
        $this->form_validation->set_rules('estatuto_dos', 'Estatuto', 'trim|required');
        $this->form_validation->set_rules('id_fakuldade', 'Fakuldade', 'trim|required');
        $this->form_validation->set_rules('id_departamentu', 'Departamento', 'trim|required');
        $this->form_validation->set_rules('nu_telf', 'nu_telf', 'trim|required');
        $this->form_validation->set_rules('kargu', 'Kargu', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
        $data['titlu']='Administrator || Dosente';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $fakuldade = $this->M_Fakuldade->get_fakuldade();
            $departamento = $this->M_Departamento->get_departamento();
            $dadus = array(
                'fakuldade' => $fakuldade,
                'departamento' => $departamento
            );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar',$data);
        $this->load->view('administrator/dosente/aumentadst',$dadus);
        $this->load->view('template/footer');
   }else {
    $data = [
        'nrd' => htmlspecialchars($this->input->post('nrd', true)),
        'naran_dosente' => htmlspecialchars($this->input->post('naran_dosente', true)),
        'fatin' => htmlspecialchars($this->input->post('fatin', true)),
        'data_moris' => htmlspecialchars($this->input->post('data_moris', true)),
        'sexo' => htmlspecialchars($this->input->post('sexo', true)),
        'hela_fatin' => htmlspecialchars($this->input->post('hela_fatin', true)),
        'naturalidade' => htmlspecialchars($this->input->post('naturalidade', true)),
        'estatus_dos' => htmlspecialchars($this->input->post('estatus_dos', true)),
        'nasionalidade' => htmlspecialchars($this->input->post('nasionalidade', true)),
        'nivel_educacao' => htmlspecialchars($this->input->post('nivel_educacao', true)),
        'area_espesialidade' => htmlspecialchars($this->input->post('area_espesialidade', true)),
        'univer_orijin' => htmlspecialchars($this->input->post('univer_orijin', true)),
        'tinan_hahu' => htmlspecialchars($this->input->post('tinan_hahu', true)),
        'estatuto_dos' => htmlspecialchars($this->input->post('estatuto_dos', true)),
        'id_fakuldade' => htmlspecialchars($this->input->post('id_fakuldade', true)),
        'id_departamentu' => htmlspecialchars($this->input->post('id_departamentu', true)),
        'kargu' => htmlspecialchars($this->input->post('kargu', true)),
        'nu_telf' => htmlspecialchars($this->input->post('nu_telf', true)),
        'email' => htmlspecialchars($this->input->post('email', true))
    ];
    $this->M_Dosente->aumentads($data);
    $this->session->set_flashdata('flash', 'Halot');
    redirect('administrator/dosente');
        }
        
    }



    public function orario()
    {
        $data['titlu'] = 'Administrator || Kartaun Planu Studu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $departamento = $this->M_Departamento->get_departamento();
        $dadus = array('departamento' => $departamento);
        $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('template/navbar',$data);
                $this->load->view('administrator/orario/orario',$dadus);
                $this->load->view('template/footer');
    }

    public function hareorario($id_departamentu)
    {
        $this->form_validation->set_rules('id_dis', 'Disiplina', 'trim|required|is_unique[orario.id_dis]', ['is_unique' => 'Disciplina nee priense tiha ona']);
        $this->form_validation->set_rules('id_dosente', 'Dosente', 'trim|required');
        $this->form_validation->set_rules('loron', 'Loron', 'trim|required');
        $this->form_validation->set_rules('oras', 'Oras', 'trim|required');
        $this->form_validation->set_rules('sala', 'Sala', 'trim|required');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Administrator || Orario Disiplina';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $detail = $this->M_Departamento->get_detail($id_departamentu);
            $dis = $this->M_Orario->getData($id_departamentu)->result();
            $disiplina = $this->M_Disiplina->getdis();
            $dosente = $this->M_Dosente->get_dosente();
          
            $depdis = $this->M_Orario->getDepDis($id_departamentu)->result();
            $dadus = array(
                'detail' => $detail,
                'dis' => $dis,
                'disiplina' => $disiplina,
                'dosente' => $dosente,
               
                'depdis' => $depdis

            );
            $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('template/navbar',$data);
                $this->load->view('administrator/orario/hareorario',$dadus);
                $this->load->view('template/footer');
        } else {
            $data = [
                'id_departamentu' => $id_departamentu,
                'id_dis' => htmlspecialchars($this->input->post('id_dis')),
                'id_dosente' => htmlspecialchars($this->input->post('id_dosente')),
                'loron' => htmlspecialchars($this->input->post('loron')),
                'oras' => htmlspecialchars($this->input->post('oras')),
                'sala' => htmlspecialchars($this->input->post('sala'))
                
            ];

            $this->db->insert('orario', $data);

            $this->session->set_flashdata('flash', 'Tinan Akademiku halot ho Succesu');
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function valor()
    {
        $data['titlu'] = 'Administrator || Orario Disiplina';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $departamento = $this->M_Departamento->get_departamento();
        $dadus = array('departamento' => $departamento);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar',$data);
        $this->load->view('administrator/valor/valor',$dadus);
        $this->load->view('template/footer');
    }


    public function getDis($id_departamentu)
    {
        $data['titlu'] = 'Administrator || Orario Disiplina';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $detail = $this->M_Departamento->get_detail($id_departamentu);
        $dis = $this->M_Orario->getData($id_departamentu)->result();
        $semester = $this->M_Orario->getData($id_departamentu)->row_array();
        $disiplina = $this->M_Disiplina->getDis();
        $dosente = $this->M_Dosente->get_dosente();
        $ta = $this->M_Akademiku->get_akad();
        // $depdis = $this->M_Orario->getDepDis($id_departamentu)->result();
        $dadus = array(
            'detail' => $detail,
            'dis' => $dis,
            'disiplina' => $disiplina,
            'dosente' => $dosente,
            'ta' => $ta,
            'semester' => $semester

        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar',$data);
        $this->load->view('administrator/valor/lista_valor', $dadus);
        $this->load->view('template/footer');
    }
    public function prinxevalor($id_dis)
    {

        $this->form_validation->set_rules('valor', 'valor', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        $where = ['id_dis' => $id_dis];
        $data['titlu'] = 'Administrator || Orario Disiplina';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $dis = $this->M_Valor->getDis('disiplina', $where)->row_array();
        $estudante = $this->M_Valor->getEst($id_dis)->result();
        $dadus = array('dis' => $dis,
         'estudante' => $estudante);
        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar',$data);
            $this->load->view('administrator/valor/prinxevalor', $dadus);
            $this->load->view('template/footer');
        } else {
            $data = [
                'id_dis' => $id_dis,
                'valor' => htmlspecialchars($this->input->post('valor', true)),
                'status' => 'laaktivu'

            ];
          //  $this->M_Kps->hadiavalor($data);
            $this->db->update('kps', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Valor Prinse ona ho Succesu.</div>');
            return redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function update($id_dis)
    {
        $query = [];
        $id_kps = $_POST['id_kps'];
        $valor = $_POST['valor'];
        $status = $_POST['status'];
        for ($i = 0; $i < sizeof($id_kps); $i++) {
            $this->db->set('valor', $valor[$i])->where('id_kps', $id_kps[$i])->update('kps');
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Ita boot sai ona husi sistema.</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
/* End of file Administrator.php */