<?php
class Login_mod extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function login_user($email,$pass){

      $this->db->select('*');
      $this->db->from('user_account');
      $this->db->where('user_email',$email);
      $this->db->where('user_password',$pass);

      if($query=$this->db->get())
      {
          return $query->row_array();
      }
      else{
        return false;
      }


    }
    public function email_check($email){

      $this->db->select('*');
      $this->db->from('user_account');
      $this->db->where('user_email',$email);
      $query=$this->db->get();

      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }

    }
    
}
