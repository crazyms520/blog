<?php
class user extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function login(){

    }

    public function register($data){
      $this->db->insert('users',$data);
    }
}