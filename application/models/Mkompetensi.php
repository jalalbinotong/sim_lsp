<?php
	class Mkompetensi extends CI_Model
	{
        function tampildata_kompetensi()
		{
			$sql="SELECT * FROM tb_kompetensi INNER JOIN tb_skema
            ON tb_kompetensi.id_skema = tb_skema.id_skema
            order by id_kompetensi";

			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $data)
				{
					$hasil[]=$data;	
				}	
			}
			else
			{
				$hasil="";	
			}
			return $hasil;	
		}

		function simpandata_kompetensi()
		{
			$data=$_POST;
			$id_kompetensi=$data['id_kompetensi'];
			//simpan
			$sql = "select id_kompetensi from tb_kompetensi where id_kompetensi='".$id_kompetensi."'";
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				$this->db->update('tb_kompetensi',$data,array('id_kompetensi'=>$id_kompetensi));
				$this->session->set_flashdata('pesan','Data sudah diedit');
			} else {
				$this->db->insert('tb_kompetensi',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');
			}
		}

		function hapusdata_kompetensi($id_kompetensi)
		{
			$sql="delete from tb_kompetensi where id_kompetensi='".$id_kompetensi."'";
			$this->db->query($sql);	
		}


		function editdata_kompetensi($id_kompetensi)
		{
			$sql="select * from tb_kompetensi where id_kompetensi='".$id_kompetensi."'";	
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#id_kompetensi').val('".$data->id_kompetensi."');</script>";
				echo "<script>$('#id_skema').val('".$data->id_skema."');</script>";
				echo "<script>$('#kode_unit').val('".$data->kode_unit."');</script>";	
				echo "<script>$('#judul_unit').val('".$data->judul_unit."');</script>";
                echo "<script>$('#jenis_standar').val('".$data->jenis_standar."');</script>";
			}
		} 
				
}
    