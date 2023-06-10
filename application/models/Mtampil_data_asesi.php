<?php
class Mtampil_data_asesi extends CI_MODEL
{

    function tampildata_user()
    {
        $sql = 'SELECT tb_user.*,tb_asesi.* ,tb_prodi.*
        FROM tb_user INNER JOIN tb_asesi 
        ON tb_user.id_user = tb_asesi.id_user
        INNER JOIN tb_prodi
        ON tb_asesi.id_prodi = tb_prodi.id_prodi
        WHERE tipe_user = "asesi"
        ORDER BY tb_user.id_user ';

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

    function tampildata()
    {
        $sql = "select * from tb_data_asesi order by id_asesi";
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
