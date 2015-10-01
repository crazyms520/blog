<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {


  public function index()
  {
    $user_id = $this->session->userdata('id');
    if($user_id){
      $this->load->view('books/index');
    }else{
      $this->load->view('welcome_message');
    }
  }
}

