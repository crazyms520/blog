<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {
  function __construct()
    {   //呼叫建構函數
        parent::__construct();
        $this->load->model('user');
        $this->load->helper('cookie');
    }

  public function login(){
    //判斷是否有cookie
    if($this->input->cookie('login')==='YES'){
      $login = true ;
    }else{
      $login = false ;
    }
    $this->load->view('platform/login',array(
      'login'=>$login
      ));
  }
  public function login_post(){

    $account=$this->input->post('account');
    $password=$this->input->post('password');
    $user=$this->user->get_user_by_ap($account,$password);

    if($account && $password){

      if($user){
          $this->input->set_cookie('login','YES',86500);
          $this->input->set_cookie('id',$user->user_id,86500);
          $this->input->set_cookie('nick',$user->nick,86500);
          $this->input->set_cookie('account',$user->account,86500);
          $this->input->set_cookie('password',$user->password,86500);
          $login = true;
          $message = '登入成功';
          $this->load->view('platform/login_post',array(
                'login'=>$login ,
                'message'=>$message
              ));
      } else {
          $login = false;
          $message = '登入失敗';
          $this->load->view('platform/login_post',array(
                'login'=>$login ,
                'message'=>$message
              ));

      }
    } else {
      $login = false;
      $message = '登入失敗';
      $this->load->view('platform/login_post',array(
            'login'=>$login ,
            'message'=>$message
            ));
    }
  }
  public function register(){

    if($this->input->cookie('login')==='YES'){
      $login = true ;
    }else{
      $login = false ;
    }

    $this->load->view('platform/register',array('login'=>$login));
  }
  //註冊
  public function register_post(){
    $nick=$this->input->post('nick');
    $account=$this->input->post('account');
    $password=$this->input->post('password');
    $repassword=$this->input->post('repassword');
    $user=$this->user->get_user_account($account);

    if($account && $password){
      if(!$user){
          if($password == $repassword){
              $this->user->register($nick,$account,$password);
              $message = '註冊成功' ;
          } else {
              $message = '第二次輸入密碼有誤' ;
          }
      } else {
        $message = '帳號已有人使用' ;
      }

    $this->load->view('platform/register_post',array(
      'message'=>$message
      ));
    } else {
      $message = '註冊失敗' ;

      $this->load->view('platform/register_post',array(
        'message'=>$message
        ));
    }
  }
  //登出,清除所有cookie
  public function logout(){

    $this->input->set_cookie('login',null);
    $this->input->set_cookie('id',null);
    $this->input->set_cookie('nick',null);
    $this->input->set_cookie('account',null);
    $this->input->set_cookie('password',null);
    $login = false;
    $this->load->view('platform/logout',array(
      'login'=>$login
      ));
  }
}

