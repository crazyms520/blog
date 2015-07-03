<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gbooks extends CI_Controller{

    function __construct() {
        parent::__construct();


    }

    //留言版頁面
    public function index(){

        $this->load->model('gbook_sql');
        $this->load->model('user');
        $cookie=$this->input->cookie('is_login');
        $data['user_id']=$this->user->get_user_by_id($cookie);
        $data['query'] = $this->gbook_sql->all();
        $this->load->view('gbook',$data);

    }

    //新增留言
    public function AddGbook(){

        $this->load->model('gbook_sql');
        $all = $this->input->post();
        $this->gbook_sql->add($all,'blog.gbook');

        redirect(site_url().'/gbooks/index');
    }

}