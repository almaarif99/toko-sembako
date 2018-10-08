<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {


  public function __construct()
          {
                  $this->load->database();
          }


public function get_home()
{
  $this->db->limit(5);
  $query = $this->db->get('tbl_barang');
  // $query = $this->db->get('tbl_barang');
  return $query->result_array();
}

//ambil data barang
  public function get_data($data = FALSE)
  {

    if ($data === FALSE)
           {
                   $query = $this->db->get('tbl_barang');
                   return $query->result_array();
           }

           $query = $this->db->get_where('news', array('slug' => $slug));
           return $query->row_array();

}

//end

//input barang
public function create()
{

var_dump($_FILE('file'));
    $data = array(
        'id_barang'   => "",
        'id_user'     => 1,
        'code_barang' => 12,
        'nama_barang' => $this->input->post('nama'),
        'dicripsi'    => $this->input->post('dicripsi'),
        'harga'       => $this->input->post('harga'),
        'id_kategori' => 1,
        'foto' =>"a"
    );

    return $this->db->insert('tbl_barang', $data);
}

//end


public function get_update($id)
{
  $query = $this->db->get_where('mytable', array('id' => $id));
  return $query->row_array();
}



public function update($id)
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
$this->db->update('tbl_barang', $data);
$this->db->update('mytable', $data, array('id' => $id));
}

//delet data barang
public function delet($id)
{
  $this->db->where('id', $id);
  $this->db->delete('tbl_barang');
}

//end

  }
