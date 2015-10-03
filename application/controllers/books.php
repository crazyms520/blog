<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
    $this->load->model('book');
  }

  public function book($offset = 0)
  {

    $this->load->library('pagination');
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
      $this->load->view('books/index');
    }
  }

  public function search(){
    $search = $this->input->get('search_bar');
    $data['user_id'] = $this->session->userdata('id');
    if($search){
      $data['book'] = $this->book->search_book_by_id($search);
      $this->load->view('books/search',$data);
    }

  }
}

