<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tinan extends CI_Model {

  public function getTinan()
  {
  $this->db->select('*');
  $this->db->from('ta');
  return $this->db->get()->result();
  }  

  public function aumentatinan($data)
  {
   $this->db->insert('ta', $data);
  }

  public function detailtinan($id_tinan)
  {
   $this->db->select('*');
   $this->db->from('ta');
   $this->db->where('id_tn_akad', $id_tn_akad);
   return $this->db->get()->row();
  }

  function hadiatinan($data)
  {
      $this->db->where('id_tn_akad', $data['id_tn_akad']);
      $this->db->update('ta', $data);
  }
  function hamostinan($data)
  {
   $this->db->where('id_tn_akad', $data['id_tn_akad']);
   $this->db->delete('ta',$data);
  }

}

/* End of file M_Semester.php */
