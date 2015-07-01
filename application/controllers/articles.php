<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

  public function index()
  {
    if($this->input->cookie('is_login')==='YES')
      $has_login = true;
    else
      $has_login = false;


    $this->load->model('user');
    $articles=$this->user->get_articles();
    // $id=$articles[0]->id;
    $ids = array ();
    foreach ($articles as $article) {
      $ids[] = $article->id;
    }


    $users=$this->user->get_users($ids);

    // $this->user->many_users();
    // $this->user->many_articles();
    $this->load->view('articles',array(
      'articles'=>$articles,
      'has_login'=>$has_login,
      'users'=>$users

    ));

  }

  public function add()
  {
    if($this->input->cookie('is_login')==='YES')
      $has_login = true;
    else
      $has_login = false;
    $this->load->view('articles/add',array(
        'has_login'=>$has_login
      ));
  }

  public function add_post()
  {
    if($this->input->cookie('is_login')==='YES')
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
    if($this->input->cookie('is_login')==='YES')
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
    if($this->input->cookie('is_login')==='YES')
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
    if($this->input->cookie('is_login')==='YES')
      $has_login = true;
    else
      $has_login = false;
    $this->load->model('user');
    $this->user->delete($id);
    $this->load->view('articles/delete',array(
      'has_login'=>$has_login
      ));
  }

  }

