<?php
class Gbook_sql extends CI_Model{

    function __construct() {
        parent::__construct();
         $this->load->database();
    }

    public function all(){
        $query = $this->db->order_by('id','asc')->get('blog.gbook');
        return $query;
    }

    public function add($all){
        $this->db->insert('blog.gbook',$all);
    }
}
