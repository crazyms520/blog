<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {


  public function index($offset = 0)
  {

    $this->load->library('table');
    $this->load->helper('form');
    $this->load->library('pagination');
    $user_id = $this->session->userdata('id');
    if($user_id){


      $config['base_url'] = 'http://crazyms.com/blog/index.php/books/index';
      $config['total_rows'] = $this->db->count_all_results('books');
      $config['per_page'] = 5;

      $this->pagination->initialize($config);

      $this->db->limit($config['per_page'],$offset);

      $data['query'] =$this->db->get('books');
      $data['pagelist'] = $this->pagination->create_links();
      echo $this->pagination->create_links();
      $this->load->view('books/index',$data);
    }else{
      $this->load->view('welcome_message');
    }
  }
}

