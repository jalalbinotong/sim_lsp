<?php
class Mtampil_data_asesi extends CI_MODEL
{
function tampildata()
    {
        $sql="select * from tb_data_asesi order by id_asesi";
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
}