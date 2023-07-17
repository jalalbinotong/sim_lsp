<?php
class idjadwalmodel extends CI_Model
{
    public function getidjadwal()
    {
        // Melakukan query ke database untuk mendapatkan idjadwal
        $id_user = $this->session->userdata('id_user');
        $id_asesi = $this->db->get_where('tb_asesi', array('id_user' => $id_user))->row()->id_asesi;
        $query = $this->db->get_where('tb_asesi', array('id_asesi' => $id_asesi));

        if ($query->num_rows() > 0) {
            // Jika ada baris yang ditemukan, ambil nilai idjadwal dari baris pertama
            $row = $query->row();
            $id_jadwal = $row->id_jadwal;

            return $id_jadwal;
        } else {
            // Jika tidak ada baris yang ditemukan, kembalikan nilai default atau sesuaikan dengan kebutuhan Anda
            return 'nonaktif';
        }
    }
}
