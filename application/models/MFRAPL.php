<?php
class MFRAPL extends CI_Model
{
    function input_FRAPL()
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];

                $sql = "DELETE FROM tb_data_asesi WHERE id_asesi = '$id_asesi'";
                $this->db->query($sql);

                // $reg['id_asesi'] = $id_asesi;
                // $reg['foto_ktp'] = $this->input->post('foto_ktp');
                // $reg['bukti_pembayaran'] = $this->input->post('bukti_pembayaran');
                // $reg['foto'] = $this->input->post('foto');
                // $reg['no_ktp'] = $this->input->post('no_ktp');
                // $reg['tempat_lahir'] = $this->input->post('tempat_lahir');
                // $reg['tgl_lahir'] = $this->input->post('tgl_lahir');
                // $reg['jenis_kelamin'] = $this->input->post('jenis_kelamin');
                // $reg['kebangsaan'] = $this->input->post('kebangsaan');
                // $reg['alamat'] = $this->input->post('alamat');
                // $reg['telpon_hp'] = $this->input->post('telpon_hp');
                // $reg['telpon_rumah'] = $this->input->post('telpon_rumah');
                // $reg['telpon_kantor'] = $this->input->post('telpon_kantor');
                // $reg['kualifikasi_pendidikan'] = $this->input->post('kualifikasi_pendidikan');
                // $reg['nama_institusi'] = $this->input->post('nama_institusi');
                // $reg['jabatan'] = $this->input->post('jabatan');
                // $reg['alamat_kantor'] = $this->input->post('alamat_kantor');
                // $reg['tujuan'] = $this->input->post('tujuan');

                // $this->load->library('upload');

                // $config['upload_path'] = './assets/gambar'; // Tentukan direktori penyimpanan gambar
                // $config['allowed_types'] = 'gif|jpg|png'; // Tentukan jenis file yang diperbolehkan untuk diunggah

                // $this->upload->initialize($config);

                // // Upload foto KTP
                // if ($this->upload->do_upload('foto_ktp')) {
                //     $upload_data = $this->upload->data();
                //     $reg['foto_ktp'] = $upload_data['file_name']; // Simpan nama file gambar ke database
                // }

                // // Upload bukti pembayaran
                // if ($this->upload->do_upload('bukti_pembayaran')) {
                //     $upload_data = $this->upload->data();
                //     $reg['bukti_pembayaran'] = $upload_data['file_name']; // Simpan nama file gambar ke database
                // }

                // // Upload pas foto
                // if ($this->upload->do_upload('foto')) {
                //     $upload_data = $this->upload->data();
                //     $reg['foto'] = $upload_data['file_name']; // Simpan nama file gambar ke database
                // }

                // Upload File Versi Baru

                // $NamaDokumen=$this->input->post('NamaDokumen');
                $foto_ktp = $this->upload($_FILES['foto_ktp'], 'foto_ktp');
                $bukti_pembayaran = $this->upload($_FILES['bukti_pembayaran'], 'bukti_pembayaran');
                $foto = $this->upload($_FILES['foto'], 'foto');
                $ktm = $this->upload($_FILES['ktm'], 'ktm');
                $transkrip_nilai = $this->upload($_FILES['transkrip_nilai'], 'transkrip_nilai');
                $sertifikat = $this->upload($_FILES['sertifikat'], 'sertifikat');

                $reg = array(
                    'id_asesi' => $id_asesi,
                    'foto_ktp' => $foto_ktp,
                    'bukti_pembayaran' => $bukti_pembayaran,
                    'foto' => $foto,
                    'no_ktp' => $this->input->post('no_ktp'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'kebangsaan' => $this->input->post('kebangsaan'),
                    'alamat' => $this->input->post('alamat'),
                    'telpon_hp' => $this->input->post('telpon_hp'),
                    'telpon_rumah' => $this->input->post('telpon_rumah'),
                    'telpon_kantor' => $this->input->post('telpon_kantor'),
                    'kualifikasi_pendidikan' => $this->input->post('kualifikasi_pendidikan'),
                    'nama_institusi' => $this->input->post('nama_institusi'),
                    'jabatan' => $this->input->post('jabatan'),
                    'alamat_kantor' => $this->input->post('alamat_kantor'),
                    'tujuan' => $this->input->post('tujuan'),
                    'ktm' => $ktm,
                    'transkrip_nilai' => $transkrip_nilai,
                    'sertifikat' => $sertifikat,
                );

                //simpan
                $this->db->insert('tb_data_asesi', $reg);
                $this->session->set_flashdata('pesan', 'Data sudah disimpan');
                // 
            }
        }
    }

    function upload($uploadFile, $field)
    {
        // $this->load->library('upload');
        $extractFile = pathinfo($uploadFile['name']);
        $ekst = $extractFile['extension'];
        $newName = $extractFile['filename'] . "." . $ekst;
        $config['upload_path']      = FCPATH . './assets/gambar';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 5000;
        $config['overwrite']        = true;
        $config['file_name']        = $newName;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            return "";
        } else {
            return $newName;
        }
    }
}
