<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller {

public function index(){
  $this->load->model('article');
  //$this->load->model('article');
  $bbb=$this->article->get_book();


  $aaa=array(
    'name1'=>$bbb[0][0],
    'name2'=>$bbb[1][1],
    'name3'=>$bbb[2][2]

    );


  $this->load->view('book',$aaa);
  }

public function book_add(){

  $this->load->view('book_add');
  }

public function book_post(){
  $this->load->view('book_post');
  }
}
