<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

   function __construct(){
     parent::__construct();

   }

  public function index()
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;


    $this->load->model('user');
    $articles=$this->user->get_articles();

    $this->load->view('articles',array(
      'articles'=>$articles,
      'has_login'=>$has_login,

    ));

  }

  public function add()
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)

      $has_login = true;
    else
      $has_login = false;
    $this->load->view('articles/add',array(
        'has_login'=>$has_login
      ));
  }

  public function add_post()
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;

    $article=$this->input->post('add_article');
    $this->load->model('user');
    $this->user->add_article($article);
    $this->load->view('articles/add_post',array(
        'has_login'=>$has_login
      ));
  }
  public function edit($id = 0)
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;
    $this->load->model('user');
    $article=$this->user->get_article($id);

    if(!$article)
      redirect('articles');

    $this->load->view('articles/edit', array(
      'article'=>$article,
      'has_login'=>$has_login
      ));
  }
  public function edit_post($id=0)
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;
    $title=$this->input->post('article');
    $this->load->model('user');
    $this->user->update($id, array(
      'title'=>$title
      ));
    $this->load->view('articles/edit_post',array(
      'has_login'=>$has_login
      ));
  }

  public function delete($id=0)
  {
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;
    $this->load->model('user');
    $this->user->delete($id);
    $this->load->view('articles/delete',array(
      'has_login'=>$has_login
      ));
  }

  public function comment(){
    $cookie=$this->input->cookie('is_login');
    if($this->input->cookie('is_login')===$cookie)
      $has_login = true;
    else
      $has_login = false;
    $this->load->view('articles/comment',array(
        'has_login'=>$has_login
      ));
  }
}

