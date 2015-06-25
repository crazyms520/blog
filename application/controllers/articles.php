<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

public function index()
{
  $this->load->model('user');
  $articles=$this->user->get_articles();

  $this->load->view('articles',array(
      'articles'=>$articles
    ));
  }

public function add()
{
$this->load->view('articles/add');
}
public function add_post()
    {
      $article=$this->input->post('add_article');
      $this->load->model('user');
      $this->user->add_article($article);
      $this->load->view('articles/add_post');
    }
public function edit($id=0)
{
  $this->load->model('user');
  $article=$this->user->get_article($id);

  if(!$article)
    redirect('articles');
  $this->load->view('articles/edit',array(
    'article'=>$article
    ));
}
public function edit_post($id=0)
{
  $title=$this->input->post('article');
  $this->load->model('user');
  $this->user->update($id,array(
    'title'=>$title
    ));
  $this->load->view('articles/edit_post');
}

public function delete($id=0)
{
  $this->load->model('user');
  $this->user->delete($id);
  $this->load->view('articles/delete');
}
}

