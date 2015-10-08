<?php
class book extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function search_book($search){
      return $this->db->like('name',$search)
                  ->or_like('id',$search)
                  ->get('books')->result();
    }

    public function count_all_results($search){
      $this->db->like('name',$search)->or_like('id',$search);
      $this->db->from('books');
      return $this->db->count_all_results();
    }

    public function search_book_ci($search,$per_page,$offset){
      return $this->db->like('name',$search)
                      ->or_like('id',$search)
                      ->limit($per_page,$offset)
                      ->get('books')->result();
    }
}