<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

public function index(){
  $this->load->model('article');
  $aaa=$this->article->aaa();


  $this->load->view('articles',array(
    'art'=>$aaa
    ));
  }

public function add(){

  $this->load->view('add');
  }

public function add_post(){
  $this->load->view('add_post');
  }
}
