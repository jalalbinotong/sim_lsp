<?php
class Cutama extends CI_Controller
{
    function tampilview()
    {
        $this->load->view('tampilanawal');
    }

    function tampilberanda()
    {
        $data['beranda'] = $this->load->view('kontenberanda', '', TRUE);
        $this->load->view('tampilanawal', $data);
    }
}

// class Cutama extends CI_Controller
// {
//     function tampilview()
//     {
//         $this->load->view('berandagaji');
//     }
// }
