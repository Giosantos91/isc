<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
        $data['titlu'] = 'Pagina Login';
            $this->load->view('template/header_login', $data);
            $this->load->view('auth/login');
            $this->load->view('template/footer_login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {

                if ($user['aktif'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'id_role' => $user['id_role'],
                        ];
                        $this->session->set_userdata($data);
                        if ($user['id_role'] == 1) {
                            redirect('administrator');
                        } else {
                            redirect('user');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ita nia password Lalos</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email seidauk Aktivu</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email seidauk Registo</div>');
                redirect('auth');
            }
        }
}

    public function registu()
    {
        $this->form_validation->set_rules('naran_kompletu', 'Naran', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Lalos!',
            'min_length' => 'Password tenki liu karakter 3!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
        if ($this->form_validation->run() == false) {
            $data['titlu'] = 'Pagina Registu Membru Foun';

            $this->load->view('template/header_login', $data);
            $this->load->view('auth/registu');
            $this->load->view('template/footer_login');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'naran_kompletu' => htmlspecialchars($this->input->post('naran_kompletu', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'imagen' => 'default.jpg',
                'id_role' => 2,
                'aktif' => 0,
                'data_kria' => time()
            ];

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'data_kria' => time()
            ];
            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parabens! Ita nia akun kria ona ho succesu. Favor aktivu ita ia akun ho email nebe ita registu ba </div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'santosletto96@gmail.com',
            'smtp_pass' => 'eligiodossantos1991',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->email->initialize($config);
        $this->load->library('email', $config);
        $this->email->from('santosletto96@gmail.com', 'Eligio dos Santos');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Verifikasaun Akun');
        $this->email->message('Klik iha link nee atu bele verifika ita boot nia akun : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        // $this->email->message('Klik iha link nee atu bele verifika ita boot nia akun');
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

  public function haluha_password()
  {
    $data['titlu'] = 'haluha Password';

    $this->load->view('template/header_login', $data);
    $this->load->view('auth/haluha_password');
    $this->load->view('template/footer_login');
  }


  public function logout()
  {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('id_role');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ita Sai Ona husi sistema</div>');
      redirect('');
  }
  public function registuestudante()
  {
      $this->form_validation->set_rules('nre', 'Numeru Registu', 'trim|required|is_unique[estudante.nre]', ['is_unique' => 'Numeru NRE registo tiha ona']);
      $this->form_validation->set_rules('naran_estudante', 'Naran estudante', 'trim|required');
      $this->form_validation->set_rules('fatin', 'Fatin Moris', 'trim|required');
      $this->form_validation->set_rules('data_moris', 'Data Moris', 'trim|required');
      $this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
      $this->form_validation->set_rules('hela_fatin', 'Hela Fatin', 'trim|required');
      $this->form_validation->set_rules('nu_telf', 'Numeru Telefone', 'trim|required');
      $this->form_validation->set_rules('pai', 'Naran Pai', 'trim|required');
      $this->form_validation->set_rules('profisaunpai', 'Profisaun Pai', 'trim|required');
      $this->form_validation->set_rules('mae', 'Naran Mae', 'trim|required');
      $this->form_validation->set_rules('profisaunmae', 'Profisaun Mae', 'trim|required');
      $this->form_validation->set_rules('id_fakuldade', 'fakuldade', 'trim|required');
      $this->form_validation->set_rules('id_departamentu', 'Departamento', 'trim|required');
      $this->form_validation->set_rules('id_semester', 'Semester', 'trim|required');
      $this->form_validation->set_rules('nivel_estudu', 'Nivel Estudu', 'trim|required');
      $this->form_validation->set_rules('tinan_tama', 'Tinan Tama', 'trim|required');
      $this->form_validation->set_rules('fundus', 'Fundus', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[estudante.email]', ['is_unique' => 'email nee Registu tiha ona!']);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
          'matches' => 'Password Lalos!',
          'min_length' => 'Password tenki liu karakter 3!'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
      $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
      if ($this->form_validation->run() == false) {
      $data['titlu']='Registu||Estudante';
      $fakuldade = $this->M_Fakuldade->get_Fakuldade();
      $departamentu = $this->M_Departamento->get_departamento();
      $semester=$this->M_Semester->getSemester();
      $dadus = array(
          'fakuldade' => $fakuldade,
          'departamentu' => $departamentu,
          'semester'=>$semester
      );
      $this->load->view('template/header_login', $data);
          $this->load->view('auth/registuestudante');
          $this->load->view('template/footer_login');
  } else {
      $email = $this->input->post('email', true);
          $data = [
              'nre' => htmlspecialchars($this->input->post('nre', true)),
              'naran_estudante' => htmlspecialchars($this->input->post('naran_estudante', true)),
              'fatin' => htmlspecialchars($this->input->post('fatin', true)),
              'data_moris' => htmlspecialchars($this->input->post('data_moris', true)),
              'hela_fatin' => htmlspecialchars($this->input->post('hela_fatin', true)),
              'sexo' => htmlspecialchars($this->input->post('sexo', true)),
              'nu_telf' => htmlspecialchars($this->input->post('nu_telf', true)),
              'pai' => htmlspecialchars($this->input->post('pai', true)),
              'profisaunpai' => htmlspecialchars($this->input->post('profisaunpai', true)),
              'mae' => htmlspecialchars($this->input->post('mae', true)),
              'profisaunmae' => htmlspecialchars($this->input->post('profisaunmae', true)),
              'id_fakuldade' => htmlspecialchars($this->input->post('id_fakuldade', true)),
              'id_departamentu' => htmlspecialchars($this->input->post('id_departamentu', true)),
              'id_semester' => htmlspecialchars($this->input->post('id_semester', true)),
              'nivel_estudu' => htmlspecialchars($this->input->post('nivel_estudu', true)),
              'tinan_tama' => htmlspecialchars($this->input->post('tinan_tama', true)),
              'fundus' => htmlspecialchars($this->input->post('fundus', true)),
              'email' => htmlspecialchars($this->input->post('email', true)),
              'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
              'photo' => 'default.jpg',
              'id_role' => 3,
              'status' => 'Aktivu',
              'aktif' => 1,
              'data_kria' => time()
          ];
          $this->db->set('id_estudante','UUID()',false);
          $this->db->insert('estudante', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
          redirect('auth/loginestudante');
  }
  }

  function getdepart()
  {
      $id = $this->input->post('id');
      $data = $this->M_Departamento->get_depart($id);
      echo json_encode($data);
  }
  public function loginestudante()
  {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      $this->form_validation->set_message('required', 'Favor Prienxe %s labele husik mamuk');
      if ($this->form_validation->run() == false) {
         
          $data['titlu']='Login||Estudante';
          $this->load->view('template/header_login', $data);
          $this->load->view('auth/loginestudante');
          $this->load->view('template/footer_login');
      } else {
          $email = $this->input->post('email');
          $password = $this->input->post('password');
  
          $user = $this->db->get_where('estudante', ['email' => $email])->row_array();
  
          // jika usernya ada
          if ($user) {
              // jika usernya aktif
              if ($user['aktif'] == 1) {
                  // cek password
                  if (password_verify($password, $user['password'])) {
                      $data = [
                          'email' => $user['email'],
                          'id_role' => $user['id_role']
                      ];
                      $this->session->set_userdata($data);
                      if ($user['id_role'] == 3) {
                          redirect('estudante');
                      } 
                  } else {
                      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                      redirect('auth');
                  }
              } else {
                  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                  redirect('auth');
              }
          } else {
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
              redirect('auth');
          }
  }

}

public function logoutestudante()
{
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('id_role');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ita Sai Ona husi sistema</div>');
    redirect('auth/loginestudante');
}

public function blocked()
{
    $data['titlu'] = '404 PAGE NOT BE FOUND';
    $this->load->view('auth/blocked', $data);
}
}

/* End of file Auth.php */