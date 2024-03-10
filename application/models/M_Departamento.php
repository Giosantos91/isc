<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Departamento extends CI_Model
{

    function get_departamento()
    {
        $this->db->from('departamentu');
        $this->db->select('departamentu.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade');
        $this->db->join('fakuldade', 'departamentu.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->order_by('id_departamentu', 'ASC');
        return $this->db->get()->result();
    }
    function aumentadep($data)
    {
        $this->db->insert('departamentu', $data);
    }

    function get_detail($id_departamentu)
    {

        $this->db->from('departamentu');
        $this->db->select('departamentu.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade');
        $this->db->join('fakuldade', 'departamentu.id_fakuldade = fakuldade.id_fakuldade');
        $this->db->where('id_departamentu', $id_departamentu);
        return $this->db->get()->row();
    }
    function hadiadep($data)
    {
        $this->db->where('id_departamentu', $data['id_departamentu']);
        $this->db->update('departamentu', $data);
    }

    function hamosdep($data)
    {
        $this->db->where('id_departamentu', $data['id_departamentu']);
        $this->db->delete('departamentu', $data);
    }
    function get_depart($id_departamentu)
    {
        $resultado = $this->db->query("SELECT * FROM departamentu WHERE id_fakuldade='$id_departamentu'");
        return $resultado->result();
    }
    function getdetail($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function totaldep() 
    {
        $query = "SELECT `fakuldade`, 
        COUNT(fakuldade) AS total, `fakuldade`.`id_fakuldade`, `fakuldade`.`fakuldade`
        FROM `departamentu`
        JOIN `fakuldade` ON `departamentu`.id_fakuldade=`fakuldade`.`id_fakuldade`
        GROUP BY `fakuldade`";
        return $this->db->query($query)->result();
    }

    function depestu()
    {
        $query = "SELECT `departamentu`, 
        COUNT(departamentu) AS total, `departamentu`.`id_departamentu`, `departamentu`.`departamentu`
        FROM `estudante`
        JOIN `departamentu` ON `estudante`.id_departamentu=`departamentu`.`id_departamentu`
        GROUP BY `departamentu`";
        return $this->db->query($query)->result();
    }


    public function getData($id_fakuldade)
    {
        $this->db->from('departamentu');
        $this->db->select('departamentu.*,fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade');
        $this->db->join('fakuldade', ' departamentu.id_fakuldade=fakuldade.id_fakuldade ');
        $this->db->where('departamentu.id_fakuldade', $id_fakuldade);
        return $this->db->get();
    }
}

/* End of file M_Departamento.php */
