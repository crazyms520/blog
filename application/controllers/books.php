<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->model('book');
    //載入模型('book')
    $bknm=$this->book->get_titles();
    //使用模型'book'裡的函數'get_titles()',並將回傳的值賦予$bknm
    $this->load->view('books',array(
      'name'=>$bknm
      ));
    //??載入檢視('books'帶入陣列array('name'=>$bknm))??

    //$bknm['name']=$this->book->get_titles();
    //$this->load->view('books',$bknm)
  }

  public function add(){
    $this->load->view('add');
    //載入檢視('add')

  }

  public function add_post(){
    $this->load->model('book');
    //載入模型('book')
    $this->book->add_name();
    //使用模型'book'裡的函數'add_name()'
    $this->load->view('add_post');
    //載入檢視('add_post')
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */