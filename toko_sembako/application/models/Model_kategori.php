<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {


  public function __construct()
          {
                  $this->load->database();
          }



public function get_kategori()
{
  $query = $this->db->get('tbl_kategori');
  return $query->result_array();
}



public function create_kategori()
{

    $data = array(
        'id_barang'   => "",
        'id_user'     => 1,
        'code_barang' => 12,
        'nama_barang' => $this->input->post('nama_barang'),
        'dicripsi'    => $this->input->post('dicripsi'),
        'harga'       => $this->input->post('harga'),
        'id_kategori' => 1,
        'foto' => "sd"
    );

    return $this->db->insert('tbl_kategori', $data);
}




public function update_kategori($id)
{
  $data = array(
      'id_barang'   => "",
      'id_user'     => 1,
      'code_barang' => 12,
      'nama_barang' => $this->input->post('nama'),
      'dicripsi'    => $this->input->post('dicripsi'),
      'harga'       => $this->input->post('harga'),
      'id_kategori' => 1,
      'foto'        => "sd"
  );
$this->db->where('id', $id);
$this->db->update('tbl_kategori', $data);
// $this->db->update('tbl_kategori', $data, array('id_kategori' => $id));
}


public function delet_kategori($id)
{
  $this->db->where('id_kategori', $id);
  $this->db->delete('tbl_kategori');
}

  }
