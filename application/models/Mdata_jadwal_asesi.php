<?php
class Mdata_jadwal_asesi extends CI_Model
{
    function tampildata_jadwal()
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_skema = $data['id_skema'];

                $sql = "SELECT *
                FROM tb_jadwal_skema INNER JOIN tb_skema
                ON tb_jadwal_skema.id_skema = tb_skema.id_skema
                WHERE tb_jadwal_skema.id_skema = '$id_skema'";

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
    }

    function pilihjadwal($id)
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                $sql = "UPDATE tb_asesi 
                SET id_jadwal = '$id'
                WHERE id_asesi = '$id_asesi'";
                $this->db->query($sql);

                $sql = "UPDATE tb_jadwal_skema SET kuota = kuota - 1 WHERE id_jadwal = $id";
                $this->db->query($sql);
            }
        }
    }
    function gantijadwal($id)
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                // Simpan nilai id_jadwal sebelum perubahan
                $old_jadwal = $data['id_jadwal'];

                // Update id_jadwal pada tb_asesi menjadi NULL
                $sql = "UPDATE tb_asesi 
                    SET id_jadwal = NULL
                    WHERE id_asesi = '$id_asesi'";
                $this->db->query($sql);

                // Tambahkan kuota pada tb_jadwal_skema
                $sql = "UPDATE tb_jadwal_skema 
                    SET kuota = kuota + 1
                    WHERE id_jadwal = $old_jadwal";
                $this->db->query($sql);
            }
        }
    }
}
