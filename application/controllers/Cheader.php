<?php
class Cheader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function header()
    {
        $data['tipe_user'] = $this->session->userdata('tipe_user');
        $this->load->view('header', $data);
    }
}
?>