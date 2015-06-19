<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

public function index(){
  $this->load->model('book');

  $bbb=$this->book->get_book();



  $this->load->view('book',array(
    'xxx'=> $bbb
    ));
  }


public function book_add(){

  $this->load->view('book_add');
  }

public function book_post(){
  $this->load->view('book_post');
  }
}
