<?php
class Mstatus_frapl extends CI_MODEL
{

    function tampildata()
    {

        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                $sql = "SELECT `status`
                FROM tb_data_asesi
                WHERE id_asesi = '$id_asesi'";

                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $data = $query->row();
                }
            }
        }


        $this->session->set_flashdata('pesan_warn_sidebar', 'Anda Belum Mengupload Berkas Pendaftaran!');
        $this->session->set_flashdata('pesan_danger_sidebar', '');
        $this->session->set_flashdata('pesan_sidebar', '');

        if (@$data->status == 'menunggu') {
            $this->session->set_flashdata('pesan_warn_sidebar', 'Data Anda Sedang Diproses');
        }
        if (@$data->status == 'tolak') {
            $this->session->set_flashdata('pesan_danger_sidebar', 'Data Anda Ditolak! Harap Isi Kembali Data Pendaftaran Anda');

            $this->session->set_flashdata('pesan_warn_sidebar', '');
        }
        if (@$data->status == 'setuju') {
            $this->session->set_flashdata('pesan_sidebar', 'Data Anda Diterima! Sekarang Anda Dapat Mencetak Dokumen Anda');

            $this->session->set_flashdata('pesan_warn_sidebar', '');
        }
    }
}
