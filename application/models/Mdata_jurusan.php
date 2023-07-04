<?php
class Mdata_jurusan extends CI_Model
{
    function listjurusan()
    {
        $sql = "select * from tb_jurusan order by id_jurusan";
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
