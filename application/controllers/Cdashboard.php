<?php
class Cdashboard extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('mlogin');
    // }

    function dashboard()
    {
        $data['konten'] = $this->load->view('dashboard', '', TRUE);
        $this->load->view('tampilanawal', $data);
    }
}
