<?php
class Book extends CI_Model {

  function __construct()
  {
     // 呼叫模型(Model)的建構函數
     parent::__construct();
  }

  public function get_book(){

    $book=$this->db->get('books');

    $get_book = $book->result();



    foreach($get_book as $value){

      $b[]=$value->name;
    }

    return $b;
  }


}
?>