<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

public function index(){
  $this->load->model('article');

  $bbb=$this->article->get_article();

  $aaa=array(
    'title1'=>$bbb[0][0],
    'title2'=>$bbb[1][1],
    'title3'=>$bbb[2][2]

    );


  $this->load->view('articles',$aaa);
  }

public function add(){

  $this->load->view('add');
  }

public function add_post(){
  $this->load->view('add_post');
  }
}
