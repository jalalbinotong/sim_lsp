<?php class MdaftarAsesi extends CI_Model
{

    function prosesdaftarasesi()
    {
        $id_user = $this->session->userdata('id_user');
        $id_asesi_arr = $this->db->get_where('tb_asesi', array('id_user' => $id_user));

        if ($id_asesi_arr->num_rows() > 0) {
            foreach ($id_asesi_arr->result_array() as $data) {
                $id_asesi = $data['id_asesi'];


                $reg['id_asesi'] = $id_asesi;
                $reg['foto_ktp'] = $this->input->post('foto_ktp');
                $reg['bukti_pembayaran'] = $this->input->post('bukti_pembayaran');
                $reg['foto'] = $this->input->post('foto');
                $reg['no_ktp'] = $this->input->post('no_ktp');
                $reg['tempat_lahir'] = $this->input->post('tempat_lahir');
                $reg['tgl_lahir'] = $this->input->post('tgl_lahir');
                $reg['jenis_kelamin'] = $this->input->post('jenis_kelamin');
                $reg['kebangsaan'] = $this->input->post('kebangsaan');
                $reg['alamat'] = $this->input->post('alamat');
                $reg['telpon_hp'] = $this->input->post('telpon_hp');
                $reg['telpon_rumah'] = $this->input->post('telpon_rumah');
                $reg['telpon_kantor'] = $this->input->post('telpon_kantor');
                $reg['nama_institusi'] = $this->input->post('nama_institusi');
                $reg['jabatan'] = $this->input->post('jabatan');
                $reg['alamat_kantor'] = $this->input->post('alamat_kantor');

                //simpan
                $this->db->insert('tb_data_asesi', $reg);
                $this->session->set_flashdata('pesan', 'Data sudah disimpan');
                // 
            }
        }
    }
}
