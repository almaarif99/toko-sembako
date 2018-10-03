<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct()
  	{
  		parent::__construct();
      $this->load->helper('url','form');
  		$this->load->model('Model_barang');
      $this->load->library('form_validation');
    
  	}

public function show()
{

}

//create
public function create()
{
    $this->load->model('Model_kategori');
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->
        $this->load->view('templates/header');
        $this->load->view('admin/tambah_barang');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->Model_barang->create();
        $this->load->view('admin/tambah_barang');
    }
}

//end create barang

//update barang

public function update($id)
{
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

      if ($this->form_validation->run() === FALSE)
      {
        $this->Model_barang->get_update($id);
          $this->load->view('templates/header');
          $this->load->view('admin/update_barang');
          $this->load->view('templates/footer');

      }
      else
      {
          $this->Model_barang->update($id);
          $this->load->view('admin/update_barang');
      }
}
//end update barang


//delet barang
public function delet($id)
{
  if ($id === FALSE) {

  }
$this->Model_barang->delet($id);

}
//end delet barang

  }
