<?php
class Cgaji extends CI_Controller
{
    function gaji()
    {
        $data['konten'] = $this->load->view('formgaji', '', TRUE);
        $this->load->view('berandagaji', $data);
    }

    function formhitunggaji()
    {
        $hasil = $_POST;

        $data['konten'] = $this->load->view('formhitunggaji', $hasil, TRUE);
        $this->load->view('berandagaji', $data);
    }
}
