<?php
class User extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function get_user_by_ap ($account, $password) {
    $this->db->where ('account', $account);
    $this->db->where ('password', $password);
    $query = $this->db->get('blog.users');
    $users = $query->result();


    if (count ($users) > 0) {
      return $users[0];
    } else {
      return null;
    }
  }

  public function get_user_by_id($cookie){

    $this->db->where('user_id',$cookie);
    $query=$this->db->get('blog.users');
    return $query->result();
  }

  public function register($nick,$account,$password){
    $data=array(
      'nick'=>$nick,
      'account'=>$account,
      'password'=>$password

      );

    $this->db->insert('blog.users',$data);

  }
  public function get_users_by_acc_nic($account)
  {
    $this->db->where('account', $account);
    // $this->db->where('nick', $nick);
    $query=$this->db->get('blog.users');

    return $query->result();
  }
  // public function get_users($ids)
  // {
  //   $this->db->where_in ('id', $ids);
  //   $query=$this->db->get('blog.users');
  //   return $query->result();
  // }
  public function get_articles()
  {

    $this->db->select('*');
    $this->db->from('blog.articles');
    $this->db->join('blog.users', 'articles.user_id = users.user_id');
    $query = $this->db->get();
    // $query=$this->db->get('blog.articles');

    return $query->result();
  }
  public function get_article($id)
  {
    $this->db->where('id',$id);
    $query=$this->db->get('blog.articles');
    $result= $query->result();

    if(count($result)>0){
      return $result[0];
    }else{
      return null;
    }
  }
  public function add_article($article)
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie){


      $data=array(
        'title'=>$article,
        'user_id'=>$cookie
        );
      $this->db->insert('blog.articles',$data);
    }
  }
  public function update($id,$data)
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie){
    $this->db->where('id',$id);
    $this->db->update('blog.articles',$data);
    }
  }
  public function delete($id)
  {

    $this->db->where('id',$id);
    $this->db->delete('blog.articles');

  }

// public function many_users()
// {
//   $i=11;
//   while ($i<= 111) {
//     $nick='nick'.$i;
//     $account='user'.$i;
//     $password=$i;

//     $data=array(
//       'nick'=>$nick,
//       'account'=>$account,
//       'password'=>$password
//       );
//     $this->db->insert('blog.users',$data);
//     $i++;
//   }
// }

  // public function many_articles()
  // {
  //   $i=101;
  //   while ($i<=111) {
  //     $article="article".$i;
  //     $data=array(
  //       'title'=>$article
  //       );
  //   $this->db->insert('blog.articles',$data);
  //   $i++;
  //   }
  // }
}