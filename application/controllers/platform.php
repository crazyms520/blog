<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {

  function __construct(){
    parent::__construct();

  }

  public function login()
  {
    if($this->input->cookie('is_login')==='YES')
      $has_login = true;
    else
      $has_login = false;
    $this->load->view('platform/login',array(
          'has_login'=>$has_login
        ));
  }
  public function login_post()
  {
    $account=$this->input->post('account');
    $password=$this->input->post('password');

    // if (!($account && $password)) {
    //   // 其中一個沒有
    // } else {

    // }
    $this->load->model('user');
    $user=$this->user->get_user_ap($account,$password);

    if ($account && $password) {
      // 真的post過來的
      if($user){
        $this->load->helper('cookie');

        $this->input->set_cookie('is_login','YES',86500);
        $message='登入成功';
        $has_login=true;
      } else {
        $message='登入失敗';
        $has_login=false;
      }
    }  else {
      $message='登入失敗';
      $has_login=false;

    }

    $this->load->view('platform/login_post',array(
      'message'=>$message,
      'has_login'=>$has_login
    ));


  }

  public function logout()
  {
    $this->load->helper('cookie');
    $this->input->set_cookie('is_login',null);

    $has_login=false;

    $this->load->view('platform/logout',array(
        'has_login'=>$has_login
      ));
  }

  public function register()
  {
    $this->load->view('platform/register');
  }

  public function register_post()
  {
    $nick=$this->input->post('nick');

    $account=$this->input->post('account');

    $password=$this->input->post('password');

    $this->load->model('user');
    $userc=$this->user->get_users_by_acc_nic($account);
      if(!$userc){
        $this->user->register($account,$password,$nick);
        $message='註冊成功';
        $this->load->view('platform/register_post',array(
            'message'=>$message
          ));
      }else{
        $message='此帳號已有人使用';
        $this->load->view('platform/register_post', array(
            'message'=>$message
          ));
      }
  }
}

