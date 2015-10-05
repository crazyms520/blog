<?php
class book extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function search_book_by_id($search){
      $this->db->like('name',$search);
      $this->db->or_like('id',$search);
      return $book = $this->db->get('books')->result();
    }
}