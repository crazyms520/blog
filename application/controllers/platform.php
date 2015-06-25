<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends CI_Controller {


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
        $this->load->model('user');
        $user=$this->user->get_user_ap($account,$password);

          if($user){
            $this->load->helper('cookie');

            $this->input->set_cookie('is_login','YES',86500);
            $n=$user->nick;
            $message='登入成功';
            $has_login=true;
          }else{

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
      $this->user->register($account,$password,$nick);
      $this->load->view('platform/register_post');
    }

    // public function article()
    // {
    //   $this->load->model('user');
    //   $articles=$this->user->get_article();

    //   $this->load->view('platform/article',array(
    //     'articles'=>$articles
    //     ));
    // }

    // public function add_article()
    // {

    //   $this->load->view('platform/add_article');
    // }

    // public function add_article_post()
    // {
    //   $article=$this->input->post('add_article');
    //   $this->load->model('user');
    //   $this->user->add_article($article);
    //   $this->load->view('platform/add_article_post');
    // }
}

