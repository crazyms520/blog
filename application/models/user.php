<?php
class user extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function get_user_by_id($id){
      $this->db->where('user_id',$id);
      $user = $this->db->get('users')->result();

      if(count($user) > 0){
        return $user[0];
      }else{
        return null;
      }
    }
    public function get_user_by_acc_pas($acc,$pas){
      $this->db->where('account',$acc)
               ->where('password',$pas);
      $user = $this->db->get('users')->result();

      if(count($user) > 0){
        return $user[0];
      }else{
        return null;
      }

    }

    public function register($data){
      $this->db->insert('users',$data);
    }
}