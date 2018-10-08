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

    public function a()
    {
      $ma=$this->Model_barang->create();
      $this->load->view('admin/tambah_barang',$ma);
    }

public function show_barang()
{
  $this->load->view('templates/admin/header');
  $this->load->view('admin/tampil_barang');
  $this->load->view('templates/admin/footer');
}

//create
public function create_barang()
{
    $this->load->model('Model_kategori');
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

    if ($this->form_validation->run() === FALSE)
    {

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_barang');
        $this->load->view('templates/admin/footer');

    }
    else
    {
        $this->Model_barang->create();
        $this->load->view('admin/tambah_barang');
    }
}

//end create barang

//update barang

public function update_barang($id)
{
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

      if ($this->form_validation->run() === FALSE)
      {
        $this->Model_barang->get_update($id);
        $this->load->view('templates/admin/header');
        $this->load->view('admin/update_barang');
        $this->load->view('templates/admin/footer');

      }
      else
      {
          $this->Model_barang->update($id);
          $this->load->view('templates/admin/header');
          $this->load->view('admin/update_barang');
          $this->load->view('templates/admin/footer');
      }

          $this->load->view('templates/admin/header');
          $this->load->view('admin/update_barang');
          $this->load->view('templates/admin/footer');
}




public function delet_barang($id)
{

$this->Model_barang->delet($id);

}


//end barang

//kategori


public function show_kategori()
{
  $this->load->view('templates/admin/header');
  $this->load->view('admin/kategori/tampil_kategori');
  $this->load->view('templates/admin/footer');
}


public function create_kategori()
{
    $this->load->model('Model_kategori');
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

    if ($this->form_validation->run() === FALSE)
    {

        $this->load->view('templates/admin/header');
        $this->load->view('admin/kategori/tambah_kategori');
        $this->load->view('templates/admin/footer');

    }
    else
    {
          $this->Model_barang->create();
          $this->load->view('templates/admin/header');
          $this->load->view('admin/kategori/tambah_kategori');
          $this->load->view('templates/admin/footer');
    }


}


public function update_kategori($id)
{
    $this->form_validation->set_rules('nama_barang', 'nama', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');
    $this->form_validation->set_rules('dicripsi', 'dicripsi', 'required');

      if ($this->form_validation->run() === FALSE)
      {
        $this->Model_barang->get_update($id);
        $this->load->view('templates/admin/header');
        $this->load->view('admin/kategoti/update_kategoria');
        $this->load->view('templates/admin/footer');

      }
      else
      {
          $this->Model_barang->update($id);
          $this->load->view('templates/admin/header');
          $this->load->view('admin/kategoti/update_kategoria');
          $this->load->view('templates/admin/footer');
      }

}
//end update kategori

public function delet_kategori($id)
{

$this->Model_barang->delet($id);

}
  }
