<?php class Mdaftar extends CI_Model
{

    function prosesdaftar()
    {
        $Nim = $this->input->post('Nim');
        $NamaLengkap = $this->input->post('NamaLengkap');
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');

        $data = $_POST;
        $id_user = $data['id_user'];
        if ($id_user == "") {
            //simpan
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        } else {
            //edit	
            $update = array(
                'KodeData' => $id_user
            );
            $this->db->where($update);
            $this->db->update('tbjadwal', $data);
            $this->session->set_flashdata('pesan', 'Data sudah diedit');
        }
    }
}
