<?php
class User extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function get_user_ap ($account, $password) {
    $this->db->where ('account', $account);
    $this->db->where ('password', $password);
    $query = $this->db->get('users');
    $users = $query->result();
    if (count ($users) > 0) {
      return $users[0];
    } else {
      return null;
    }
  }

  public function register($account,$password,$nick)
  {
    $data=array(

      'account'=>$account,
      'password'=>$password,
      'nick'=>$nick

      );
    $this->db->insert('users',$data);
  }

}