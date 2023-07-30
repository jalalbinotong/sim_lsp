<?php
class Makun_pegawai extends CI_Model
{
    function akun_pegawai()
    {
        $sql = "SELECT * FROM tb_user WHERE tipe_user = 'lsp' ORDER BY id_user";
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

    function hapusakun_pegawai($id_user)
    {
        $sql = "delete from tb_data_pegawai where id_user='" . $id_user . "'";
        $this->db->query($sql);

        $sql = "delete from tb_user where id_user='" . $id_user . "'";
        $this->db->query($sql);
    }
}
