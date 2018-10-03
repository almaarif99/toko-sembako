<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Controller {

  public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/view/'.$page.'.php'))
        {

                show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('view/'.$page, $data);
        $this->load->view('templates/footer', $data);
}
  }
