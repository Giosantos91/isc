<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dosente extends CI_Model {

  function get_dosente()
  {
      $this->db->from('dosente');
      $this->db->select('dosente.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
      $this->db->join('fakuldade', 'dosente.id_fakuldade = fakuldade.id_fakuldade');
      $this->db->join('departamentu', 'dosente.id_departamentu = departamentu.id_departamentu');
      $this->db->order_by('nrd', 'ASC');
      return $this->db->get()->result();
  }

  function aumentads($data)
  {
      $this->db->insert('dosente', $data);
  }

 
      function get_detailds($id_dosente)
      {
          $this->db->from('dosente');
          $this->db->select('dosente.*, fakuldade.id_fakuldade AS id_fakuldade, fakuldade.fakuldade, departamentu.id_departamentu AS id_departamentu, departamentu.departamentu');
          $this->db->join('fakuldade', 'dosente.id_fakuldade = fakuldade.id_fakuldade');
          $this->db->join('departamentu', 'dosente.id_departamentu = departamentu.id_departamentu');
          $this->db->order_by('nrd', 'ASC');
          $this->db->where('id_dosente', $id_dosente);
          return $this->db->get()->row();
      }
  
  function hadiadosente($data)
  {
      $this->db->where('id_dosente', $data['id_dosente']);
      $this->db->update('dosente', $data);
  }

  function hamosdosente($data)
  {
      $this->db->where('id_dosente', $data['id_dosente']);
      $this->db->delete('dosente', $data);
  }

  function import($data)
  {
      $this->db->insert_batch('dosente', $data);
  }

}

/* End of file M_Dosente.php */
