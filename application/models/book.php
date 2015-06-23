<?php
class Book extends CI_Model {

  function __construct(){
    //呼叫(model)的建構函數
    parent::__construct();
  }

  public function get_titles()
  {



    $get_tit=$this->db->get('books');
    //將資料庫('books')取出來的值賦予$get_tit
    return $get_tit->result();
    //將$get_tit經過result()處理後的值賦予$titles


    // foreach ($title as $value){

    //   $a[]=$value->name;
    //   //使用foreach將$value中的name值賦予陣列$a[]

    // }

    // return $a;
    //回傳陣列$a
  }

  public function add_name($data){

    // $data=array(
    //    'name'=>$_POST['addbook']
    //    );
    //將接收到的ＰＯＳＴ值賦予$data
    $this->db->insert('books',$data);


    //新增資料庫,帶入參數$data
  }
  public function updata($id,$data){

    $this->db->where('id',$id);
    $this->db->update('books',$data);
  }

}