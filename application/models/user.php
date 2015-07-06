<?php
class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_user_by_ap($account,$password){
      $this->db->where('account',$account);
      $this->db->where('password',$password);
      $query = $this->db->get('blog.users');
      $users = $query->result();

      if(count($users) > 0){
        return $users[0] ;
      } else {
        return null;
      }
    }

    public function get_user_account($account){
      $this->db->where('account',$account);
      $query = $this->db->get('blog.users');
      $users = $query->result();

      if(count($users) > 0){
        return $users[0] ;
      } else {
        return null;
      }
    }

    public function register($nick,$account,$password){
      $data=array(
        'nick'=>$nick,
        'account'=>$account,
        'password'=>$password
            );
      $this->db->insert('blog.users',$data);

    }
}