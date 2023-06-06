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
			//simpan
			$this->db->insert('tb_skema',$data);
			$this->session->set_flashdata('pesan','Data sudah disimpan');	
			
		}
				
}
    