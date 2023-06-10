<?php
class Mtampil_data_asesi extends CI_MODEL
{

    function tampildata_user()
    {
        $sql = 'SELECT *
        FROM tb_user INNER JOIN tb_asesi 
        ON tb_user.id_user = tb_asesi.id_user
        INNER JOIN tb_prodi
        ON tb_asesi.id_prodi = tb_prodi.id_prodi
        INNER JOIN tb_data_asesi
        ON tb_asesi.id_asesi = tb_data_asesi.id_asesi
        WHERE tipe_user = "asesi"
        ORDER BY tb_data_asesi.id DESC';

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
