<?php
class Article extends CI_Model {

  function __construct()
  {
        // 呼叫模型(Model)的建構函數
    parent::__construct();
  }
  public function aaa(){
    $aaa=$this->db->get('articles');
    $bbb=$aaa->result();
echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
var_dump ($bbb[0]->id);
exit ();

    return $aaa->result();

      }
}
