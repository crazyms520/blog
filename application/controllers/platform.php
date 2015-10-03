<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
  }

  public function login()
  {
    $account = $this->input->post('account');
    $password = $this->input->post('password');
    $user = $this->user->get_user_by_acc_pas($account,$password);
    if($account && $password){
      if($user){
        $this->session->set_userdata('login','YES',86500);
        $this->session->set_userdata('id',$user->user_id,86500);
        $data['user_id'] = $this->session->userdata('id');
        $data['login'] = $this->session->userdata('login');
        $data['name'] = $user->name;
        $this->load->view('books/index',$data);
      }else{
        $data['user_id'] = $this->session->userdata('id');
        $data['login'] = $this->session->userdata('login');
        $this->load->view('welcome_message',$data);
      }
    }else{
      $data['user_id'] = $this->session->userdata('id');
      $data['login'] = $this->session->userdata('login');
      $this->load->view('welcome_message',$data);
    }
  }

  public function logout(){
    $this->session->unset_userdata('login');
    $this->session->unset_userdata('id');
    $data['user_id'] = $this->session->userdata('id');
    $data['login'] = $this->session->userdata('login');
    $this->load->view('welcome_message',$data);
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

