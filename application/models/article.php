<?php
class Article extends CI_Model {
    //呼叫建構函數
    function __construct()
    {
        parent::__construct();
    }
    //取得所有文章
    public function get_articles(){
      $this->db->select('*');
      $this->db->from('blog.articles');
      $this->db->join('blog.users', 'articles.user_id = users.user_id');
      $query = $this->db->get();

      return $query->result();
    }
    //用id取得文章
    public function get_article_by_id($id){
      $this->db->where('id',$id);
      $query=$this->db->get('blog.articles');
      $articles=$query->result();
      if(count($articles) > 0){
        return $articles[0];
      }else {
        return null;
      }
    }
    //新增
    public function add($title,$user_id,$content,$time){

      $data=array(
        'title'=>$title,
        'user_id'=>$user_id,
        'content'=>$content,
        'time'=>$time
        );
      $this->db->insert('blog.articles',$data);
    }
    //更新
    public function update($id,$data){

      $this->db->where('id',$id);

      $this->db->update('blog.articles',$data);
    }
    //刪除
    public function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('blog.articles');
    }
}