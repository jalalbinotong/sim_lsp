<?php
class Cdashboard extends CI_Controller
{
    function dashboard()
    {
        $data['konten'] = $this->load->view('dashboard', '', TRUE);
        $this->load->view('tampilanawal', $data);
    }
}
