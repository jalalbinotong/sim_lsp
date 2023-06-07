<?php
class Mdata_pegawai extends CI_Model
{
  function tampil_data()
  {
    $sql = "select * from tb_data_pegawai order by id_user";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $data) {
        $hasil[] = $data;
      }
    } else {
      $hasil = "";
    }
    return $hasil;
  }
}
