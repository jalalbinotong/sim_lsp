<?php class Mlogin extends CI_Model
{

    function proseslogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $sql = "select email,password from tb_user where email='" . $email . "' and password='" . $password . "'";
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
