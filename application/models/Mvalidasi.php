<?php
class Mvalidasi extends CI_Model
{
    function validasi_admin()
    {
        if ($this->session->userdata('tipe_user') != 'admin') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }
    function validasi_lsp()
    {
        if ($this->session->userdata('tipe_user') == 'lsp') {
            $id_user_lsp = $this->session->userdata('id_user');
            $data_pg = $this->db->get_where('tb_data_pegawai', array('id_user' => $id_user_lsp));
            if ($data_pg->num_rows() == 0) {
                redirect('cmasterdata_pegawai/masterdata_pegawai', 'refresh');
            } else {
            }
        } else if ($this->session->userdata('tipe_user') == 'admin') {
        } else {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }

    function validasi_lsp_data()
    {
        if ($this->session->userdata('tipe_user') == 'lsp') {
        } else {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }

    function validasi_asesi()
    {
        if ($this->session->userdata('tipe_user') != 'asesi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }
}
