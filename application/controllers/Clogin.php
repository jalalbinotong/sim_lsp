<?php
class Clogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
    }
    function formlogin()
    {
        $data['konten'] = $this->load->view('formlogin', '', TRUE);
        $this->load->view('tampilanawal', $data);
    }

    function proseslogin()
    {
        $this->mlogin->proseslogin();
    }
}
