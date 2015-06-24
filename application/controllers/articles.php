<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {


  public function index()
  {
    $this->load->model('article');
    $articles=$this->article->get_articles();

    $this->load->view('article/index', array(
        'articles' => $articles
      ));
  }
  public function add()
  {
    $this->load->view('article/add');
  }
  public function add_post()
  { $this->load->model('article');
    $get_post=$this->input->post('title');
    $data=array(
      'title'=> $get_post
      );
    $this->article->add_article($data);
    $this->load->view('article/add_post');
  }

  public function edit($id=0)
  {
    $this->load->model('article');
    $articles = $this->article->get_articles();
    $data=array(
      'article'=>$articles
      );

    $this->load->view('article/edit',$data);

  }

  public function edit_post ($id=0)
  {
     $title = $this->input->post ('title');


     // $this->article->update_article ($id, array (
     //   'title' => $title
     //  ));

    $this->load->view('article/edit_post');
  }

  public function delete($id=0)
  {
    $this->load->model('article');
    $this->article->delete_article($id);
    $this->load->view('article/delete');
  }
  // public function update()
  // {


  //   $this->load->view('article/update');
  // }
  // public function update_post()
  // {
  //   $id=$this->input->post('id');
  //   $title=$this->input->post('title');

  //   $data=array(
  //     'title'=>$title
  //     );
  //   $this->load->model('article');
  //   $this->article->update_article($id, $data);
  //   $this->load->view('article/update_post');
  // }
}

