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

  function proseseditdata()
  {
      $data = $_POST;
      $NIP = $data['NIP'];
      // //simpan
      // $this->db->insert('tb_data_pegawai', $data);
      // $this->session->set_flashdata('pesan', 'Data sudah disimpan');
      

              //edit	
      $update = array(
      	'NIP' => $NIP
      );
      $this->db->where($update);
      $this->db->update('tb_data_pegawai', $data);
      $this->session->set_flashdata('pesan', 'Data sudah diedit');
  }

  function hapusakun_pegawai($id_user)
  {
    $sql = "delete from tb_user where id_user='" . $id_user . "'";
    $this->db->query($sql);
  }

  function hapusdata($NIP)
  {
      $sql = "delete from tb_data_pegawai where NIP='" . $NIP . "'";
      $this->db->query($sql);
  }

  function editdata($NIP)
		{
			$sql="select * from tb_data_pegawai where NIP='".$NIP."'";	
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#NIP').val('".$data->NIP."');</script>";
				echo "<script>$('#nama').val('".$data->nama."');</script>";
				echo "<script>$('#kelamin').val('".$data->kelamin."');</script>";	
				echo "<script>$('#tempat_lahir').val('".$data->tempat_lahir."');</script>";
        echo "<script>$('#tgl_lahir').val('".$data->tgl_lahir."');</script>";
        echo "<script>$('#nomor_hp').val('".$data->nomor_hp."');</script>";
        echo "<script>$('#alamat').val('".$data->alamat."');</script>";
        echo "<script>$('#email').val('".$data->email."');</script>";
        echo "<script>$('#jabatan').val('".$data->jabatan."');</script>";
        echo "<script>$('#golongan').val('".$data->golongan."');</script>";
			}
		} 
}
