<?php
class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    //藉由帳號密碼取得user
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
    //藉由帳號取得user,用來判別帳號有無重覆
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
    //註冊
    public function register($nick,$account,$password){
      $data=array(
        'nick'=>$nick,
        'account'=>$account,
        'password'=>$password
            );
      $this->db->insert('blog.users',$data);
    }

    public function get_guests(){
      $query=$this->db->get('blog.guests');
      $guest=$query->result();

      if (count($guest) >0 ) {
        return $guest[0];
      }else{
        return null;
      }
    }

    public function add_guests($id,$guest_id){

      $this->db->where('id',$id);

      $this->db->update('blog.guests',array(
        'guest'=>$guest_id
        ));
    }


}