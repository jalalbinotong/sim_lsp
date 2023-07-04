<?php
class Mdata_prodi extends CI_Model
{
    function listprodi()
    {
        $sql = "select * from tb_prodi order by id_prodi";
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
