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
    $bknm=$this->book->get_titles();

    $this->load->view('books',array(
      'name'=>$bknm
      ));
  }

  public function add(){
    // $this->load->model('book');
    // $insert_name=$this->book->add_name();
    $this->load->view('add');

  }

  public function add_post(){
    $this->load->model('book');
    $insert_name=$this->book->add_name();

    $this->load->view('add_post',$insert_name);
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */