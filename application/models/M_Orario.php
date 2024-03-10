
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Orario extends CI_Model
{

    public function getData($id_departamentu)
    {
        $this->db->from('orario');
        $this->db->select('orario.*,departamentu.id_departamentu AS id_departamentu, departamentu.departamentu, disiplina.id_dis AS id_dis, disiplina.kode_disiplina, disiplina.disiplina, disiplina.id_semester,disiplina.sks, dosente.id_dosente AS id_dosente, dosente.naran_dosente');
        // $this->db->join('ta', 'orario.id_tn_akad = ta.id_tn_akad');
        $this->db->join('departamentu', ' departamentu.id_departamentu=orario.id_departamentu ');
        $this->db->join('disiplina', 'orario.id_dis = disiplina.id_dis');
        $this->db->join('dosente', 'orario.id_dosente = dosente.id_dosente');
        $this->db->order_by('id_semester', 'ASC');
        $this->db->where('orario.id_departamentu', $id_departamentu);


        return $this->db->get();

        // $this->db->select('*');
        // $this->db->from('orario');
        // $this->db->join('ta', 'ta.id_tn_akad = orario.id_tn_akad', 'left');
        // $this->db->join('departamentu', 'departamentu.id_departamentu = orario.id_departamentu', 'left');
        // $this->db->join('disiplina', 'disiplina.id_dis = orario.id_dis', 'left');
        // $this->db->join('dosente', 'dosente.id_dosente = orario.id_dosente', 'left');
        // $this->db->where('orario.id_departamentu', $id_departamentu);
        // $this->db->order_by('semester', 'asc');
        // $query = $this->db->get();
        // return $query;
    }

    function getDepDis($id_departamentu)
    {
        $this->db->select('*');
        $this->db->from('disiplina');
        $this->db->where('disiplina.id_departamentu', $id_departamentu);
        $this->db->order_by('id_semester', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    function hamosorario($data)
    {
        $this->db->where('id_orario', $data['id_orario']);
        $this->db->delete('orario', $data);
    }
}

/* End of file M_Orario.php */
