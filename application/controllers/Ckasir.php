<?php
class Ckasir extends CI_Controller
{
    function Kasir()
    {
        //menyimpan view form daftar di array data -->konten
        $data['konten'] = $this->load->view('formkasir', '', TRUE);
        //kirim konten ke halaman utama --> tampilawal
        $this->load->view('tampilanawal', $data);
    }

    function formhitung()
    {
        $hasil = $_POST;

        // $hasil['NamaBarang'] = $this->input->post('NamaBarang');
        // $hasil['HargaBarang'] = $this->input->post('HargaBarang');
        // $hasil['Jumlah'] = $this->input->post('Jumlah');

        //menyimpan view form daftar di array data -->konten
        $data['konten'] = $this->load->view('formhitung', $hasil, TRUE);
        //kirim konten ke halaman utama --> tampilawal
        $this->load->view('tampilanawal', $data);
    }
}
