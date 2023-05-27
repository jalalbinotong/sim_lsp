<?php class Mdaftar extends CI_Model
{

    function prosesdaftar()
    {
        $reg['nim'] = $this->input->post('nim');
        $reg['nama_lengkap'] = $this->input->post('nama_lengkap');
        $reg['email'] = $this->input->post('email');
        $reg['password'] = $this->input->post('password');
        $reg['tipe_user'] = $this->input->post('tipe_user');
        $reg['verifikasi'] = 0;

        $data = $_POST;
        $id_user = $data['id_user'];
        if ($id_user == "") {
            //simpan
            $this->db->insert('tb_user', $reg);
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
            redirect('cdaftar/formdaftar', 'refresh');
        } else {
        }
    }
}