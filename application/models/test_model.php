<?php
class Test_model extends CI_Model {

  function __construct()
  {
     // 呼叫模型(Model)的建構函數
     parent::__construct();
  }

  public function index(){

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('entries',10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // 請看一下下面的注意事項
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this,array('id' => $_POST['id']));
    }

}
    // $aaa=$this->db->get('articles');
    // // 進入db取得'articles'然後放在＄aaa;
    // $r = $aaa->result();

    // foreach ($r as $key => $value) {
    //   echo $value->title."<br>";
    }
// echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
// var_dump ($aaa->result());
// exit ();
    // return $aaa->result();
    // // 將＄aaa給result()處理後回傳？？？
  }


}
?>
