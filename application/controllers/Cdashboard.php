<?php
class Cdashboard extends CI_Controller
{
    function dashboard()
    {   
        $data['sidebar'] = $this->load->view('sidebar', '', TRUE);
        $data['konten'] = $this->load->view('dashboard', '', TRUE);
        $this->load->view('tampilanawal', $data);
    }
}
