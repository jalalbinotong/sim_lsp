<?php class Mdaftar extends CI_Model
{

    function prosesdaftar()
    {
        $Nim = $this->input->post('nim');
        $NamaLengkap = $this->input->post('nama_lengkap');
        $Email = $this->input->post('email');
        $Password = $this->input->post('password');
        $tipe_user = $this->input->post('tipe_user');

        $data = $_POST;
        $id_user = $data['id_user'];
        if ($id_user == "") {
            //simpan
            echo "P";
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
            redirect('cdaftar/formdaftar', 'refresh');
        } else {
        }
    }
}
