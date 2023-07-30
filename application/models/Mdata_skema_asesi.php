<?php
class Mdata_skema_asesi extends CI_Model
{
    function tampildata_skema()
    {
        $sql = "SELECT *
        FROM tb_skema INNER JOIN tb_jurusan
        ON tb_skema.id_jurusan = tb_jurusan.id_jurusan";

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

    function pilihskema($id)
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                $sql = "UPDATE tb_asesi 
                SET id_skema = '$id'
                WHERE id_asesi = '$id_asesi'";
                $this->session->set_flashdata('pesan', 'Anda telah memilih skema');
                $this->db->query($sql);
            }
        }
    }
}
