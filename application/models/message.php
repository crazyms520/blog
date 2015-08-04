<?php
class Message extends CI_Model {
    //呼叫建構函數
    function __construct()
    {
        parent::__construct();
    }

    public function cretae(){
      $this->db->insert('blog.messgae',$date);
    }

    public function get_messages($id){
      $this->db->where('replay_id',$id);
      $query = $this->db->get('blog.message');
      $messages= $query->result();

      return $messages;
    }
    public function get_user_name($id){
      $this->db->select('*');
      $this->db->from('blog.users');
      $this->db->join('blog.message','users.user_id = message.user_id');
      $this->db->where('replay_id',$id);

      $query = $this->db->get();
      $user_name = $query->result();
      return $user_name;

    }
}