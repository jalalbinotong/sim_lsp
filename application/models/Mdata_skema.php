<?php
	class Mdata_skema extends CI_Model
	{
        function tampildata_skema()
		{
			$sql="select * from tb_skema order by id_skema";
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

		function simpandata()
		{
			$data=$_POST;
			$id_skema=$data['id_skema'];
			if($id_skema==$id_skema)
			{
				//simpan
				$this->db->insert('tb_skema',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$update=array(
					'id_skema'=>$id_skema
				);
				$this->db->where($update);
				$this->db->update('tb_skema',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}

		function hapusdata($id_skema)
		{
			$sql="delete from tb_skema where id_skema='".$id_skema."'";
			$this->db->query($sql);	
		}


		function editdata($id_skema)
		{
			$sql="select * from tb_skema where id_skema='".$id_skema."'";	
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#id_skema').val('".$data->id_skema."');</script>";
				echo "<script>$('#nama_skema').val('".$data->nama_skema."');</script>";
				echo "<script>$('#deskripsi').val('".$data->deskripsi."');</script>";	
				echo "<script>$('#id_jurusan').val('".$data->id_jurusan."');</script>";
			}
		} 
				
}
    