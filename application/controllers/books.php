<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
    $this->load->model('book');
    $this->load->library('pagination');
  }
  public function book($offset = 0)
  {


    $data['user_id'] = $this->session->userdata('id');
    if($data['user_id']){
      $config['base_url'] = 'http://crazyms.com/blog/index.php/books/book';
      $config['total_rows'] = $this->db->count_all_results('books');
      $config['per_page'] = 5;

      $this->pagination->initialize($config);
      $this->db->limit($config['per_page'],$offset);
      $data['query'] = $this->db->get('books');
      $data['pagelist'] = $this->pagination->create_links();
      $this->load->view('books/book',$data);
    }else{
      $data['user_id'] = $this->session->userdata('id');
      $data['user'] = $this->user->get_user_by_id($data['user_id']);
      $this->load->view('books/index',$data);
    }
  }

  public function search(){
    $data['search'] = $this->input->get('search');
    $data['user_id'] = $this->session->userdata('id');
    $search = $data['search'];
    if($data['search']){

      $config['base_url'] = "http://crazyms.com/blog/index.php/books/search?search=$search&offset=$offset";
      $config['total_rows'] = count($this->book->search_book_by_id($data['search']));
      $config['per_page'] = 5;
      $config['uri_segment'] = 1;

      $this->pagination->initialize($config);

      $this->db->limit($config['per_page'],$offset);
      $data['book'] = $this->book->search_book_by_id($data['search']);
      $data['pagelist'] = $this->pagination->create_links();

      $this->load->view('books/search',$data);
    }

  }
}

