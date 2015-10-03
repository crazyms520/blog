<?php
class book extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function search_book_by_id($id){
      $this->db->where('id',$id);
      $book = $this->db->get('books')->result();

      if(count($book) > 0 ){
        return $book[0];
      }else{
        return null;
      }
    }
}