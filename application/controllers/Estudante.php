<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estudante extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        is_logged_in();
    }
    public function index()
    {
        $mhs = $this->M_Estudante->getSession()->row_array();
        $data['titlu'] = 'Estudante || Dashboard';
        $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();
        $viewkpslaaktivu = $this->M_Kps->viewkpslaaktivu($mhs['id_estudante'])->result();
        $std = $this->M_Estudante->getSession()->row_array();
        $dadus = array('viewkpslaaktivu' => $viewkpslaaktivu, 'std' => $std);
        $this->load->view('template/header_estudante', $data);
        $this->load->view('template/navbar_estudante', $data);
        $this->load->view('template/sidebar_estudante', $data);
        $this->load->view('estudante/dashboard',$dadus);
        $this->load->view('template/footer_estudante');
    }

    public function kps()
    {
        $mhs = $this->M_Estudante->getSession()->row_array();
        $data['titlu'] = 'Estudante || Kartaun Planu Estudu';
        $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();
        $kps = $this->M_Kps->get_kps($mhs['id_departamentu'])->result();
        $viewkps = $this->M_Kps->viewkps($mhs['id_estudante'])->result();
        $std = $this->M_Estudante->getSession()->row_array();
        $id_semester = $this->M_Semester->getSemester();
        $dadus = array(

            'std' => $std,
            'kps' => $kps,
            'viewkps' => $viewkps,
            'id_semester' => $id_semester

        );
        $this->load->view('template/header_estudante', $data);
        $this->load->view('template/navbar_estudante', $data);
        $this->load->view('template/sidebar_estudante', $data);
        $this->load->view('estudante/kps',$dadus);
        $this->load->view('template/footer_estudante');
    }

    public function addkps($id_orario)
    {
        $std = $this->M_Estudante->getSession()->row_array();

        $this->form_validation->set_rules('id_dis', 'Disiplina', 'trim|required|is_unique[kps.id_orario]', ['is_unique' => 'Disciplina nee priense tiha ona']);

        $data = [
            'id_orario' => $id_orario,
            'id_estudante' => $std['id_estudante'],
            // 'tn_akad'=>date('Y'),
            'status' => 'aktivu',
        ];
        $this->db->insert('kps', $data);

        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function profile()
    {
        $mhs = $this->M_Estudante->getSession()->row_array();
        $data['titlu'] = 'Estudante || Profile';
        $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();
        $kps = $this->M_Kps->get_kps($mhs['id_departamentu'])->result();
        $viewkps = $this->M_Kps->viewkps($mhs['id_estudante'])->result();
        $std = $this->M_Estudante->getSession()->row_array();
        $id_semester = $this->M_Semester->getSemester();
        $dadus = array(

            'std' => $std,
            'kps' => $kps,
            'viewkps' => $viewkps,
            'id_semester' => $id_semester

        );
        $this->load->view('template/header_estudante', $data);
        $this->load->view('template/navbar_estudante', $data);
        $this->load->view('template/sidebar_estudante', $data);
        $this->load->view('estudante/profile',$dadus);
        $this->load->view('template/footer_estudante');
    }


    public function hadia_dadus()
{
    $data['titlu']='Administrator || Hadia Profile';
    $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();
    $std = $this->M_Estudante->getSession()->row_array();
    $fakuldade = $this->M_Fakuldade->get_fakuldade();
    $departamentu = $this->M_Departamento->get_departamento();
        $this->form_validation->set_rules('naran_estudante', 'Naran estudante', 'trim|required');
    $dadus = array(
        'fakuldade' => $fakuldade,
        'departamentu' => $departamentu,
        'std' => $std
    );
    if ($this->form_validation->run() == false) {
        $this->load->view('template/header_estudante', $data);
        $this->load->view('template/navbar_estudante', $data);
        $this->load->view('template/sidebar_estudante', $data);
        $this->load->view('estudante/hadia_dadus',$dadus);
        $this->load->view('template/footer_estudante');
    } else {
       
        $naran_estudante = htmlspecialchars($this->input->post('naran_estudante'));
        $email = $this->input->post('email');
        $this->db->set('naran_estudante', $naran_estudante);
        $this->db->update('estudante');
        $this->session->set_flashdata('flash', 'Hadia');
        redirect('estudante/profile');
    }
}

public function troka_foto()
{
    $data['titlu']='Estudante || Troka Foto';
    $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();
    $std = $this->M_Estudante->getSession()->row_array();
    $this->form_validation->set_rules('naran_estudante', 'Naran estudante', 'trim|required');
    $dadus = array(
       
        'std' => $std
    );
    if ($this->form_validation->run() == false) {
        $this->load->view('template/header_estudante', $data);
        $this->load->view('template/navbar_estudante', $data);
        $this->load->view('template/sidebar_estudante', $data);
        $this->load->view('estudante/troka_foto',$dadus);
        $this->load->view('template/footer_estudante');
    } else {
       
        $naran_estudante = htmlspecialchars($this->input->post('naran_estudante'));
        $email = $this->input->post('email');
        $upload_image = $_FILES['photo']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/estudante/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')) {
                $old_image = $data['estudante']['photo'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/estudante/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('photo', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->update('estudante');
        $this->session->set_flashdata('flash', 'Hadia');
        redirect('estudante/profile');
    }
}
public function hamoskps($id_kps)
{

    $data = array('id_kps' => $id_kps);
    $this->M_Kps->hamoskps($data); // Panggil fungsi delete dari model
    $this->session->set_flashdata('flash', 'Disiplina Hamos');
    return redirect($_SERVER['HTTP_REFERER']);
}
function getdepart()
   {
       $id = $this->input->post('id');
       $data = $this->M_Departamentu->get_depart($id);
       echo json_encode($data);
   }




    public function printkpe($id_estudante)
    {

        $estudante = $this->M_Estudante->estd($id_estudante)->row_array();
        $viewkps = $this->M_Kps->viewkps($id_estudante)->result();
        $dadus = [
            'estudante' => $estudante,
            'viewkps' => $viewkps
        ];
        $this->load->view('estudante/printkpe', $dadus);
    }


    public function printkre($id_estudante)
    {

        $estudante = $this->M_Estudante->estd($id_estudante)->row_array();
        $viewkrelaaktivu = $this->M_Kps->viewkrelaaktivu($id_estudante)->result();
        $dadus = [
            'estudante' => $estudante,
            'viewkrelaaktivu' => $viewkrelaaktivu
        ];
        $this->load->view('estudante/printkre', $dadus);
    }

    public function troka_password()
    {
        $data['titlu'] = 'Troka Password';
        $data['estudante'] = $this->db->get_where('estudante', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_estudante', $data);
            $this->load->view('template/navbar_estudante', $data);
            $this->load->view('template/sidebar_estudante', $data);
            $this->load->view('estudante/troka_password',$dadus);
            $this->load->view('template/footer_estudante');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['estudante']['password'])) {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('estudante/troka_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('estudante/troka_password');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('estudante');

                    $this->session->set_flashdata('flash', 'Password troka');
                    redirect('estudante/troka_password');
                }
            }
        }
    }
}

/* End of file Estudante.php */