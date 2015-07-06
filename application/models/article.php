<?php
class Article extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_articles(){
      $this->db->select('*');
      $this->db->from('blog.articles');
      $this->db->join('blog.users', 'articles.user_id = users.user_id');
      $query = $this->db->get();

      return $query->result();
    }

    public function get_articles_by_id($id){
      $this->db->where('id',$id);
      $query=$this->db->get('blog.articles');
      $articles=$query->result();

      if(count($articles) > 0){
        return $articles[0];
      }else {
        return null;
      }
    }
    public function add($title,$user_id){
      $data=array(
        'title'=>$title,
        'user_id'=>$user_id
        );
      $this->db->insert('blog.articles',$data);
    }

    public function update($id,$data){

      $this->db->where('id',$id);

      $this->db->update('blog.articles',$data);
    }

    public function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('blog.articles');
    }
}