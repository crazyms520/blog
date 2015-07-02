<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	  function __construct(){
	    parent::__construct();
	  }

		public function index()
		{
			$this->load->helper('cookie');

	    $cookie=$this->input->cookie('is_login');
	    if(!$cookie){
	      $has_login = false;

	    	$this->load->view('welcome_message',array(
	    			'has_login'=>$has_login
	      	));

	    } else {

	    	if($this->input->cookie('is_login')===$cookie){
	      $has_login = true ;

	    	}else {
	      $has_login = false;
	    }

	    $this->load->view('welcome_message',array(
	        'has_login'=>$has_login
	      ));
		}

	}

}