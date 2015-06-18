<?php
class Article extends CI_Model {

  function __construct()
  {
     // 呼叫模型(Model)的建構函數
     parent::__construct();
  }

  public function get_article(){
    $article=$this->db->get('articles');
    $get_article = $article->result();

    // foreach ($get_article as $key => $value) {
    //   $value->title;
    // }
    // $a=$value->title;
    // return $a;

    $i=0;
    foreach($get_article=$article->result() as $key=>$value){

        $a[$i]=array($i=>$value->title);
        $i++;
    }
    return $a;
  }

}



    // return $article->result();



// echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
// var_dump ($get_article);
// exit ();









