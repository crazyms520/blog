<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

public function index(){
  $this->load->model('article');

  $bbb=$this->article->get_article();



  $this->load->view('articles',array(
    'xxx'=>$bbb
    ));
  }


public function add(){

  $this->load->view('add');
  }

public function add_post(){
  $this->load->view('add_post');
  }
}
