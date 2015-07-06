<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {
  function __construct()
    {
        parent::__construct();
        $this->load->model('article');
        $this->load->helper('cookie');
    }
  public function index(){
    if($this->input->cookie('login') === 'YES'){

      $articles = $this->article->get_articles();

      $login = true ;
      $this->load->model('user');
      $account=$this->input->cookie('account');
      $nick=$this->user->get_user_account($account);
      $this->load->view('article',array(
        'login'=>$login,
        'articles'=>$articles
        ));

    } else {
        $login = false ;

        $this->load->view('article',array(
        'login'=>$login
        ));
    }
  }

  public function add(){

    if($this->input->cookie('login') === 'YES'){
      $login = true ;

      $this->load->view('articles/add',array(
          'login'=>$login
        ));
    } else {
      $login = false;
      $this->load->view('articles/add',array(
          'login'=>$login
        ));
    }
  }

  public function add_post(){
    $title = $this->input->post('title');
    if($this->input->cookie('login') === 'YES'){
      $user_id=$this->input->cookie('id');

      $this->article->add($title,$user_id);
      $login = true ;
      $message = '新增成功';

      $this->load->view('articles/add_post',array(
          'login'=>$login,
          'message'=>$message
        ));
    } else {
      $login = false;
      $message = '新增失敗';
      $this->load->view('articles/add_post',array(
          'login'=>$login,
          'message'=>$message
        ));
    }
  }

  public function edit($id = 0){
    if($this->input->cookie('login') === 'YES'){

      $login = true ;
      $article = $this->article->get_articles_by_id($id);
      $this->load->view('articles/edit',array(
          'login'=>$login,
          'article'=>$article
        ));
    } else {
      $login = false ;

      $this->load->view('articles/edit',array(
          'login'=>$login
        ));
    }
  }

  public function edit_post($id=0){


    if($this->input->cookie('login') === 'YES'){
      $title=$this->input->post('title');
      $login = true;
      $message = '修改成功';

      $this->article->update($id,array(
          'title'=>$title

        ));
      $this->load->view('articles/edit_post',array(
          'login'=>$login,
          'message'=>$message
        ));
    } else {
      $login = false;
      $message = '修改失敗';
      $this->load->view('articles/edit_post',array(
          'login'=>$login,
          'message'=>$message
        ));
    }
  }
  public function delete($id=0){
    if($this->input->cookie('login') === 'YES'){

      $login = true ;
      $message = '刪除成功' ;
      $this->article->delete($id);
      $this->load->view('articles/delete',array(
          'login'=>$login,
          'message'=>$message
        ));
    } else {
      $login = false ;
      $message = '刪除失敗' ;
      $this->load->view('articles/delete',array(
          'login'=>$login,
          'message'=>$message
        ));
    }
  }
}