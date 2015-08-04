<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {
  //呼叫建構函數
  function __construct()
    {
        parent::__construct();
        $this->load->model('article');
        $this->load->model('message');
        $this->load->helper('cookie');
    }
  //預設,讀取文章列表
  public function index(){
    //判斷是否有cookie
    if($this->input->cookie('login') === 'YES'){

      $articles = $this->article->get_articles();

      $login = true ;
      $this->load->view('articles/title',array(
        'login'=>$login,
        'articles'=>$articles
        ));

    } else {
        $login = false ;

        $this->load->view('articles/title',array(
        'login'=>$login
        ));
    }
  }
  //add函數,讀取view(articles/add)
  public function add(){
    //判斷是否有cookie
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
  //新增文章
  public function add_post(){
    $title = $this->input->post('title');
    $content = $this->input->post('content');
    //判斷是否有cookie
    if($this->input->cookie('login') === 'YES'){
      $user_id=$this->input->cookie('id');
      date_default_timezone_set('Asia/Taipei');
      $time = date('y-m-d H:i:s');
      $this->article->add($title,$user_id,$content,$time);
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

  public function detail($id=0){
    if($this->input->cookie('login') === 'YES'){
      $login = true ;

      $query = $this->article->get_article_by_id($id);
      $messages = $this->message->get_user_name($id);
      $this->load->view('articles/detail',array(
        'content'=>$query->content,
        'time'=>$query->time,
        'messages'=>$messages,
        'login'=>$login
        ));
    }else{
      $login = false ;
      $this->load->view('articles/detail',array(
        'login'=>$login
        ));
    }
  }
  //讀取view(articles/edit)
  public function edit($id = 0){
    //判斷是否有cookie
    if($this->input->cookie('login') === 'YES'){

      $login = true ;
      $article = $this->article->get_article_by_id($id);

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
  //修改文章
  public function edit_post($id=0){
    //判斷是否有cookie
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
  //刪除文章
  public function delete($id=0){
    //判斷是否有cookie
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