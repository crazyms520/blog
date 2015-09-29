<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
  }

  public function login()
  {
    $this->input->post('account');
    $this->input->post('password');
    $this->load->view('welcome_message');
  }

  public function register(){
    $account = $this->input->post('account');
    $name = $this->input->post('name');
    $password = $this->input->post('password');
    $repassword = $this->input->post('repassword');
    if($password == $repassword){
      $data = array(
        'account' => $account,
        'name' => $name,
        'password' => $password
        );
    $this->user->register($data);
    redirect('welcome');
    }
  }
}

