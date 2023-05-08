<?php

class Cdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdaftar');
    }

    function formdaftar()
    {
        //menyimpan view form daftar di array data -->konten
        $data['konten'] = $this->load->view('formdaftar', '', TRUE);
        //kirim konten ke halaman utama --> tampilawal
        $this->load->view('tampilanawal', $data);
    }

    function prosesdaftar()
    {
        $this->mdaftar->prosesdaftar();
    }
}
