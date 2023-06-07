<?php
class Mdata_kegiatan extends CI_Model
{
    function tampildata_kegiatan()
    {
        $sql = "SELECT tb_jadwal_skema.*, nama_skema
            FROM tb_jadwal_skema INNER JOIN tb_skema 
            ON tb_jadwal_skema.id_skema =  tb_skema.id_skema
            ORDER BY tb_jadwal_skema.id_jadwal
            ";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }



    function simpandata_kegiatan()
    {
        $data = $_POST;
        $id_jadwal = $data['id_jadwal'];
        //simpan
        $this->db->insert('tb_jadwal_skema', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
    }
}
