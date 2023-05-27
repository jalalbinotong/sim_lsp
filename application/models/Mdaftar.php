<?php class Mdaftar extends CI_Model
{

    function prosesdaftar()
    {
        $reg['nim'] = $this->input->post('nim');
        $reg['nama_lengkap'] = $this->input->post('nama_lengkap');
        $reg['email'] = $this->input->post('email');
        $reg['password'] = $this->input->post('password');
        $reg['tipe_user'] = $this->input->post('tipe_user');
        $reg['verifikasi'] = 'false';

        $this->load->model('Memail');
        $data = $_POST;
        $id_user = $data['id_user'];
        if ($id_user == "") {
            //cek nim
            $nim_c1 = $this->db->get_where('tb_masterdata_mahasiswa', array('nim' => $reg['nim']));
            if ($nim_c1->num_rows() > 0) {
                $nim_c2 = $this->db->get_where('tb_user', array('nim' => $reg['nim']));
                if ($nim_c2->num_rows() == 0) {
                    $nama_c1 = $this->db->get_where('tb_masterdata_mahasiswa', array('nama' => $reg['nama_lengkap']));
                    if ($nama_c1->num_rows() > 0) {
                        //simpan
                        $this->db->insert('tb_user_temp', $reg);
                        if ($this->Memail->sendEmail($this->input->post($reg['email']))) {
                            $this->session->set_flashdata('pesan', 'Prosess registrasi berhasil, silahkan verifikasi Email untuk mengaktifkan akun');
                            redirect('cdaftar/formdaftar', 'refresh');
                        } else {
                            // $this->session->set_flashdata('pesan_danger', 'Prosess registrasi Gagal, silahkan mencoba kembali');
                            // redirect('cdaftar/formdaftar', 'refresh');
                        }
                    } else {
                        $this->session->set_flashdata('pesan_danger', 'Nama yang di masukkan tidak benar');
                        redirect('cdaftar/formdaftar', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('pesan_danger', 'NIM yang di masukkan sudah terdaftar');
                    redirect('cdaftar/formdaftar', 'refresh');
                }
            } else {
                $this->session->set_flashdata('pesan_danger', 'NIM yang di masukkan tidak terdaftar');
                redirect('cdaftar/formdaftar', 'refresh');
            }
        } else {
        }
    }
}