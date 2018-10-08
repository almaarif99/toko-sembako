<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Model_barang');

	}

public function index()
{


  $data['makan'] = $this->Model_barang->get_home();
  $this->load->view('templates/home/header');
  $this->load->view('view/Home',$data);
  $this->load->view('templates/home/footer');

}
//   public function view($page = 'home')
// {
//         if ( ! file_exists(APPPATH.'views/view/'.$page.'.php'))
//         {
//
//                 show_404();
//         }
//
//
//
//         $this->load->view('templates/header', $data);
//         $this->load->view('view/'.$page, $data);
//         $this->load->view('templates/footer', $data);
// }
}
