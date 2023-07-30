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
        // JANGAN DIHAPUS UNTUK BAHAN DEBUG
        // var_dump($id_jadwal);
        // die();
        // $sql = "select id_jadwal from tb_jadwal_skema where id_jadwal='".$id_jadwal."'";
        // $query=$this->db->query($sql); 
        $data = $_POST;
        $id_jadwal = $data['id_jadwal'];
        // Simpan
        $sql = "SELECT id_jadwal FROM tb_jadwal_skema WHERE id_jadwal = '" . $id_jadwal . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $this->db->update('tb_jadwal_skema', $data, array('id_jadwal' => $id_jadwal));
            $this->session->set_flashdata('pesan', 'Data sudah diedit');
        } else {
            $this->db->insert('tb_jadwal_skema', $data);
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        }
    }
    // function simpandata_kegiatan()
    // {
    //     $data = $_POST;
    //     $id_jadwal = $data['id_jadwal'];
    //     
    //     $query = $this->db->get_where('tb_jadwal_skema', array('id_jadwal' => $id_jadwal));
    //     $data_exists = ($query->num_rows() > 0) ? true : false;
    //     if ($data_exists) {
    //         $this->db->where('id_jadwal', $id_jadwal);
    //         $this->db->update('tb_jadwal_skema', $data);
    //         $this->session->set_flashdata('pesan', 'Data telah diedit');
    //     } else {
    //         $this->db->insert('tb_jadwal_skema', $data);
    //         $this->session->set_flashdata('pesan', 'Data telah disimpan');
    //     }
    // }

    function hapusdata_kegiatan($id_jadwal)
    {
        $sql = "delete from tb_jadwal_skema where id_jadwal='" . $id_jadwal . "'";
        $this->db->query($sql);
    }


    // function editdata_kegiatan($id_jadwal)
    // {
    //     $sql = "SELECT tb_jadwal_skema.*, nama_skema
    //         FROM tb_jadwal_skema  INNER JOIN tb_skema 
    //         ON tb_jadwal_skema.id_skema =  tb_skema.id_skema 
    //         ORDER BY tb_jadwal_skema.id_jadwal
    //         ";
    //     $query = $this->db->query($sql);
    //     if ($query->num_rows() > 0) {
    //         $data = $query->row();
    //         echo "<script>$('#nama_skema').val('" . $data->nama_skema . "');</script>";
    //         echo "<script>$('#jadwal').val('" . $data->jadwal . "');</script>";
    //         echo "<script>$('#lokasi').val('" . $data->lokasi . "');</script>";
    //     }
    // }
    function editdata_kegiatan($id_jadwal)
    {
        $sql = "SELECT tb_jadwal_skema.*, nama_skema
            FROM tb_jadwal_skema INNER JOIN tb_skema 
            ON tb_jadwal_skema.id_skema =  tb_skema.id_skema 
            WHERE tb_jadwal_skema.id_jadwal = '" . $id_jadwal . "'
            ORDER BY tb_jadwal_skema.id_jadwal";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $data = $query->row();
            echo "<script>$('#id_jadwal').val('" . $data->id_jadwal . "');</script>";
            echo "<script>$('#id_skema').val('" . $data->id_skema . "');</script>";
            echo "<script>$('#pembukaan_pendaftaran').val('" . $data->pembukaan_pendaftaran . "');</script>";
            echo "<script>$('#penutupan_pendaftaran').val('" . $data->penutupan_pendaftaran . "');</script>";
            echo "<script>$('#lokasi').val('" . $data->lokasi . "');</script>";
            echo "<script>$('#kuota').val('" . $data->kuota . "');</script>";
        }
    }
}
