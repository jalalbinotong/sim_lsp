<?php class Mdaftar_asesi extends CI_Model
{

    function prosesdaftar_asesi()
    {
        $reg['nim'] = $this->input->post('nim');

        $data = $_POST;
        $id_user = $data['id_user'];
        if ($id_user == "") {
            //simpan
            $this->db->insert('tb_user', $reg);
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
            redirect('clogin/formlogin', 'refresh');
        } else {
        }
    }
}