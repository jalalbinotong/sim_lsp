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

  function prosesmasterdata_pegawai()
  {
      $data = $_POST;
      $NIP = $data['NIP'];
      //simpan
      $this->db->insert('tb_data_pegawai', $data);
      $this->session->set_flashdata('pesan', 'Data sudah disimpan');
      

              //edit	
      // $update = array(
      // 	'KodeData' => $KodeData
      // );
      // $this->db->where($update);
      // $this->db->update('tbdata', $data);
      // $this->session->set_flashdata('pesan', 'Data sudah diedit');
  }

  function hapusakun_pegawai($id_user)
  {
    $sql = "delete from tb_user where id_user='" . $id_user . "'";
    $this->db->query($sql);
  }
}
