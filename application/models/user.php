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
  public function get_articles()
  {
    $query=$this->db->get('articles');

    return $query->result();
  }
  public function get_article($id)
  {
    $this->db->where('id',$id);
    $query=$this->db->get('articles');
    $result= $query->result();

    if(count($result)>0){
      return $result[0];
    }else{
      return null;
    }
  }
  public function add_article($article)
  {
    $data=array(
        'title'=>$article
      );
    $this->db->insert('articles',$data);
  }
  public function update($id,$data)
  {
    $this->db->where('id',$id);
    $this->db->update('articles',$data);
  }
  public function delete($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('articles');
  }
}