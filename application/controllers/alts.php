<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alts extends CI_Controller {

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

    $this->load->helper('url');
    $this->load->view('alts');
  }
  // public function login()
  // {
  //   $this->load->helper('url');
  //   $this->load->view('login');

  // }



  // public function post()
  // {

  //   $this->load->helper('url');
  //   $user=$this->input->post('user');
  //   $password=$this->input->post('password');
  //   $this->load->view('post',array(
  //   'user'=>$user,
  //   'password'=>$password
  //   ));

  // }

  // public function alts()
  // {
  //   $this->load->helper('url');
  //   $this->load->view('alts');
  // }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */