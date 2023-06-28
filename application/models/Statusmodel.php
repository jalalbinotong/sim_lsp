<?php
class StatusModel extends CI_Model
{
    public function getStatus()
    {
        // Melakukan query ke database untuk mendapatkan status
        $id_user = $this->session->userdata('id_user');
        $id_asesi = $this->db->get_where('tb_asesi', array('id_user' => $id_user))->row()->id_asesi;
        $query = $this->db->get_where('tb_data_asesi', array('id_asesi' => $id_asesi));
    
        if ($query->num_rows() > 0) {
            // Jika ada baris yang ditemukan, ambil nilai status dari baris pertama
            $row = $query->row();
            $status = $row->status;
    
            return $status;
        } else {
            // Jika tidak ada baris yang ditemukan, kembalikan nilai default atau sesuaikan dengan kebutuhan Anda
            return 'nonaktif';
        }
    }
}
    
?>
