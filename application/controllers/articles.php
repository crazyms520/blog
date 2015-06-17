<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

public function index(){
  $this->load->view('articles');
  }

public function add(){

  $this->load->view('add');
  }

public function add_post(){
  $this->load->view('add_post');
  }
}
