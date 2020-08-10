<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model {

//Insert Property
  function check_login_data($formArray)
  {
   		  $query = $this->db->select("*")
                             ->from("users")
                             ->where($formArray)
                             ->get()->num_rows(); 
            return $query;
               
  }
}
?>