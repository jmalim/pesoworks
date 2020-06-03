<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_database extends CI_Model {

  public function checkUser($params){
    $query = $this->db->get_where("tbl_users",$params);
    return $query->result();
  }

}
