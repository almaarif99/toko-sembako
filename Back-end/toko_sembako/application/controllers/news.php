<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Model');

	}

public function index()
{


  $this->load->view('templates/header', $data);
  $this->load->view('view/'.$page, $data);
  $this->load->view('templates/footer', $data);
}
  public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/view/'.$page.'.php'))
        {

                show_404();
        }



        $this->load->view('templates/header', $data);
        $this->load->view('view/'.$page, $data);
        $this->load->view('templates/footer', $data);
}
  }
