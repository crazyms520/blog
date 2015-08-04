<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{if($this->input->cookie('login')==='YES'){
      $login = true ;
      $message = '登入狀態' ;
    }else{
      $login = false ;
      $message = '尚未登入狀態' ;
    }

    $this->load->model('user');
    $query=$this->user->get_guests();
    $guest = $query->guest;
    if ($this->input->cookie('login') !== 'YES') {
      $id=1;
     $this->user->add_guests($id,++$guest);
    }

    // $result = mysql_query("SELECT * FROM blog.users");

    $guest_id=str_pad($guest,4,'0',STR_PAD_LEFT);
		$this->load->view('welcome_message',array(
			'login'=>$login,
			'message'=>$message,
      'guest_id'=>$guest_id
			));



	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */