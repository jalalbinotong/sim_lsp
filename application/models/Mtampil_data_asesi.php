<?php
class Mtampil_data_asesi extends CI_MODEL
{

    function tampildata_user_disetujui()
    {
        $sql = "SELECT *
        FROM tb_user INNER JOIN tb_asesi 
        ON tb_user.id_user = tb_asesi.id_user
        INNER JOIN tb_prodi
        ON tb_asesi.id_prodi = tb_prodi.id_prodi
        INNER JOIN tb_data_asesi
        ON tb_asesi.id_asesi = tb_data_asesi.id_asesi
        RIGHT JOIN tb_skema
        ON tb_skema.id_skema = tb_asesi.id_skema
        WHERE tipe_user = 'asesi' AND tb_data_asesi.status = 'setuju'
        ORDER BY tb_data_asesi.id DESC";

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

    function tampildata_user_ditolak()
    {
        $sql = "SELECT *
        FROM tb_user INNER JOIN tb_asesi 
        ON tb_user.id_user = tb_asesi.id_user
        INNER JOIN tb_prodi
        ON tb_asesi.id_prodi = tb_prodi.id_prodi
        INNER JOIN tb_data_asesi
        ON tb_asesi.id_asesi = tb_data_asesi.id_asesi
        RIGHT JOIN tb_skema
        ON tb_skema.id_skema = tb_asesi.id_skema
        WHERE tipe_user = 'asesi' AND tb_data_asesi.status = 'tolak'
        ORDER BY tb_data_asesi.id DESC";

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

    function tampildata_user_menunggu()
    {
        $sql = "SELECT *
        FROM tb_user INNER JOIN tb_asesi 
        ON tb_user.id_user = tb_asesi.id_user
        INNER JOIN tb_prodi
        ON tb_asesi.id_prodi = tb_prodi.id_prodi
        INNER JOIN tb_data_asesi
        ON tb_asesi.id_asesi = tb_data_asesi.id_asesi
        RIGHT JOIN tb_skema
        ON tb_skema.id_skema = tb_asesi.id_skema
        WHERE tipe_user = 'asesi' AND tb_data_asesi.status = 'menunggu'
        ORDER BY tb_data_asesi.id DESC";

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

    // function tampildata()
    // {
    //     $sql = "select * from tb_data_asesi order by id_asesi";
    //     $query = $this->db->query($sql);
    //     if ($query->num_rows() > 0) {
    //         foreach ($query->result() as $data) {
    //             $hasil[] = $data;
    //         }
    //     } else {
    //         $hasil = "";
    //     }
    //     return $hasil;
    // }

    function tampildata($id)
    {
        $sql = "SELECT *
        FROM tb_data_asesi INNER JOIN tb_asesi 
        WHERE id = '$id'";

        $sql = "select * from tb_data_asesi where id='" . $id . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $hasil = $query->row();
        }

        return $hasil;
    }

    function setuju($id)
    {
        $sql = "UPDATE tb_data_asesi
        SET status = 'setuju'
        WHERE id = '$id'";

        $this->db->query($sql);
        $this->session->set_flashdata('pesan_danger', '');
        $this->session->set_flashdata('pesan', 'Berkas Telah Disetujui');
    }

    function tolak($id)
    {
        $sql = "UPDATE tb_data_asesi
        SET status = 'tolak'
        WHERE id = '$id'";

        $this->db->query($sql);
        $this->session->set_flashdata('pesan', '');
        $this->session->set_flashdata('pesan_danger', 'Berkas Telah Ditolak');
    }
}
