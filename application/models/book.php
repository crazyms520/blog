<?php
class Book extends CI_Model {

  function __construct(){
    //呼叫(model)的建構函數
    parent::__construct();
  }

  public function get_titles()
  {
    $get_tit=$this->db->get('books');
    $titles=$get_tit->result();


    foreach ($titles as $value){

      $a[]=$value->name;
    }

  return $a;
  }

  public function add_name(){

    $data=array(
      'name'=>$_POST['addbook']
      );

    $this->db->insert('books',$data);
  }
}