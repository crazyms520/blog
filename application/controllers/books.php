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
      $config['use_page_numbers'] = TRUE;
      // $config['page_query_string'] = TRUE;
      // $config['query_string_segment'] = 'per_page';


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
    $search = $this->input->get('search');
    $offset = $this->input->get('per_page');

    $data['user_id'] = $this->session->userdata('id');

    if($search){

      $config['base_url'] = site_url()."/../index.php/books/search?search=$search";
      $config['total_rows'] =$this->book->count_all_results($search);
      $config['per_page'] = 5;
      $config['page_query_string'] = TRUE;
      $this->pagination->initialize($config);

      $data['pagination'] = $this->pagination->create_links();


      $data['search'] = $search;
      $data['book'] = $this->book->search_book_ci($search,$config['per_page'],$offset);
      $this->load->view('books/search',$data);
    }

  }
}

