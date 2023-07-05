<?php class Mdata_pdf_asesi extends CI_Model
{

    function tampildata()
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        $hasil = null; // Inisialisasi variabel $hasil dengan null

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                $sql = "SELECT *
                FROM tb_data_asesi INNER JOIN tb_asesi
                ON tb_data_asesi.id_asesi = tb_asesi.id_asesi
                INNER JOIN tb_user
                ON tb_user.id_user = tb_asesi.id_user
                WHERE tb_asesi.id_asesi = '$id_asesi'";

                // $sql = "select * from tb_data_asesi where id='" . $id . "'";
                $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                    $hasil = $query->row();
                    break; // Keluar dari loop setelah mendapatkan hasil pertama
                }
            }
        }

        return $hasil; // Mengembalikan nilai $hasil yang sesuai
    }
}
