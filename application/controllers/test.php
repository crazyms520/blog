<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
//class Test 是繼承自 CI_controller

  public function index()
  {
    $date=array(
      'title' =>'My Title',
      'heading'=>'My Heading',
      'message'=>'Message'
    );


    $date['todo_list']=array('1','2','3','4');

    $this->load->model('test_model');
    //進入model('test_model')

     $bbb=$this->test_model->index();
    //

    $this->load->view('test',$date,$bbb);




    // $this->load->view('test',$date);
    }

  public function edit($blog_id)
  {
    echo $blog_id;
  }

  private function utility()
  {
    echo "do something code";
  }

}

