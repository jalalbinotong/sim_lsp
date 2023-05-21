<?php class Mlogin extends CI_Model
{

    function proseslogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $sql = "select email,password,tipe_user,id_user,nama_lengkap from tb_user where email='" . $email . "' and password='" . $password . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            //ada ada di database
            $data = $query->row();
                $id_user = $data->id_user;
                $tipe_user = $data->tipe_user;
                $nama_lengkap = $data->nama_lengkap;
                $array = array(
                    'id_user' => $id_user,
                    'tipe_user' => $tipe_user,
                    'nama_lengkap' => $nama_lengkap
                );
                
                if ($tipe_user == 'admin'){
                $this->session->set_userdata($array);
                redirect('cdashboard/dashboard');
                }
                else if ($tipe_user == 'lsp'){
                    $this->session->set_userdata($array);
                    redirect('cdashboard_lsp/dashboard');
                
                }
                else if ($tipe_user == 'asesi'){
                    $this->session->set_userdata($array);
                    redirect('cdashboard_asesi/dashboard');
                }
        } else {
            //tidak ada data
            $this->session->set_flashdata('pesan', 'Login Gagal');
            redirect('clogin/formlogin', 'refresh');
        }
    }
}