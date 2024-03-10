<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Estudante extends CI_Model
{

    function get_estudante()
    {
        $this->db->from('estudante');
        $this->db->select('estudante.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu, semester.id_semester AS id_semester, semester.semester');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu');
        $this->db->join('semester', 'estudante.id_semester = semester.id_semester');
        $this->db->where('status', 'Aktivu');
        $this->db->order_by('nre', 'ASC');
        return $this->db->get()->result();
    }

    function get_estudantenonaktif()
    {
        $this->db->from('estudante');
        $this->db->select('estudante.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu');
        $this->db->where('status', 'La Aktivu');
        $this->db->order_by('nre', 'ASC');
        return $this->db->get()->result();
    }

    function aumentaestudante($data)
    {

        $this->db->insert('estudante', $data);
    }

    function get_detail($id_estudante)
    {
        $this->db->from('estudante');
        $this->db->select('estudante.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu');
        $this->db->order_by('nre', 'ASC');
        $this->db->where('id_estudante', $id_estudante);
        return $this->db->get()->row();
    }

    function get_detaillaaktivo($id_estudante)
    {
        $this->db->from('estudante');
        $this->db->select('estudante.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu');
        $this->db->order_by('nre', 'ASC');
        $this->db->where('status', 'La Aktivu');
        $this->db->where('id_estudante', $id_estudante);
        return $this->db->get()->row();
    }
    function hadiastd($data)
    {
        $this->db->where('id_estudante', $data['id_estudante']);
        $this->db->update('estudante', $data);
    }

    function hamosestudante($data)
    {
        $this->db->where('id_estudante', $data['id_estudante']);
        $this->db->delete('estudante', $data);
    }

    public function estd($id_estudante)
    {

        $this->db->select('*');
        $this->db->from('estudante');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade', 'left');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu', 'left');
        $this->db->join('ta', 'estudante.id_tn_akad = estudante.id_tn_akad', 'left');

        $this->db->where('estudante.id_estudante', $id_estudante);
        $query = $this->db->get();
        return $query;
    }

    function getSession()
    {

        $this->db->select('*');
        $this->db->from('estudante');
        $this->db->join('fakuldade', 'estudante.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->join('departamentu', 'estudante.id_departamentu = departamentu.id_departamentu');
        $this->db->where('estudante.email', $this->session->userdata('email'));
        $query = $this->db->get();
        return $query;
    }

    function aktivu()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE status= "Aktivu" ');
        $aktivu = $query->num_rows();
        return $aktivu;
    }
    function laaktivu()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE status= "La Aktivu" ');
        $laaktivu = $query->num_rows();
        return $laaktivu;
    }

    function manelaaktivu()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE sexo ="Mane" AND  status= "La Aktivu"  ');
        $mane = $query->num_rows();
        return $mane;
    }

    function fetolaaktivu()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE sexo ="Feto" AND  status= "La Aktivu"  ');
        $feto = $query->num_rows();
        return $feto;
    }

    function gradua()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE status= "Graduado" ');
        $gradua = $query->num_rows();
        return $gradua;
    }

    function mane()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE sexo ="Mane" AND  status= "Aktivu"  ');
        $mane = $query->num_rows();
        return $mane;
    }
    function feto()
    {
        $query = $this->db->query('SELECT * FROM estudante WHERE sexo ="Feto" AND status= "Aktivu"');
        $feto = $query->num_rows();
        return $feto;
    }

    public function getData($id_departamentu)
    {
        $this->db->from('estudante');
        $this->db->select('estudante.*,departamentu.id_departamentu AS id_departamentu, departamentu.departamentu, semester.id_semester AS id_semester, semester.semester');
        $this->db->join('departamentu', ' estudante.id_departamentu=departamentu.id_departamentu ');
        $this->db->join('semester', ' estudante.id_semester=semester.id_semester ');
        $this->db->where('estudante.id_departamentu', $id_departamentu);
        return $this->db->get();
    }
}

/* End of file M_Estudante.php */
