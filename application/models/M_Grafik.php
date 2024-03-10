<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Grafik extends CI_Model {

    function totalestudante()
    {
        $query = $this->db->query('SELECT * FROM estudante GROUP BY nre ASC');
        $totalestudante = $query->num_rows();
        return $totalestudante;
    }
    function totaldosente() 
    {
    $query= $this->db->query('SELECT * FROM dosente GROUP BY nrd');
        $totaldosente = $query->num_rows();
        return $totaldosente;
    }

    function totalfakuldade() 
    {
    $query= $this->db->query('SELECT * FROM fakuldade GROUP BY id_fakuldade');
        $totalfakuldade = $query->num_rows();
        return $totalfakuldade;
    }
    function totaldepartamentu() 
    {
    $query= $this->db->query('SELECT * FROM departamentu GROUP BY id_departamentu');
        $totaldepartamentu = $query->num_rows();
        return $totaldepartamentu;
    }

}

/* End of file M_Grafik.php */
