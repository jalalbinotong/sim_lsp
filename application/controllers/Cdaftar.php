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
        $this->load->view('header', $data);
    }

    function prosesdaftar()
    {
        $this->mdaftar->prosesdaftar();
        redirect('cdaftar/formdaftar');
    }
    function prosesdaftarasesi()
    {
        $this->mdaftarAsesi->prosesdaftarasesi();
        redirect('cdaftar/FRAPL');
    }
    function FRAPL()
    {
        $data['konten'] = $this->load->view('FRAPL', '', TRUE);
        $this->load->view('header', $data);
    }
}
