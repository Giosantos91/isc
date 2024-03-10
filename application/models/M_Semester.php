<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Semester extends CI_Model {

  public function getSemester()
  {
  $this->db->select('*');
  $this->db->from('semester');
  return $this->db->get()->result();
  }  

  public function aumentasemester($data)
  {
   $this->db->insert('semester', $data);
  }

  public function detailsemester($id_semester)
  {
   $this->db->select('*');
   $this->db->from('semester');
   $this->db->where('id_semester', $id_semester);
   return $this->db->get()->row();
  }

  function hadiasemester($data)
  {
      $this->db->where('id_semester', $data['id_semester']);
      $this->db->update('semester', $data);
  }
  function hamossemester($data)
  {
   $this->db->where('id_semester', $data['id_semester']);
   $this->db->delete('semester',$data);
  }

}

/* End of file M_Semester.php */
