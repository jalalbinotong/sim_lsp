<?php class Mlogin extends CI_Model
{

    function proseslogin()
    {
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Password');

        $sql = "select * from tb_user where email='" . $Email . "' and password='" . $Password . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            // ada data di database
            // menuju dashboard
            redirect('cadmin/formadmin', 'refresh');
        } else {
            //tidak ada data
            $this->session->set_flashdata('pesan', 'Login Gagal');
            redirect('clogin/formlogin', 'refresh');
        }
    }
}
