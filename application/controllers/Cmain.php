<?php
class Cmain extends CI_Controller
{
    // function tampilheader()
    // {
    //     $this->load->view('header');
    // }

    function tampilberanda()
    {
        $data['beranda'] = $this->load->view('kontenberanda', '', TRUE);
        $this->load->view('header', $data);
    }
}
