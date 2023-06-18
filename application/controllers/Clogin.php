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
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function proseslogin()
    {
        $this->mlogin->proseslogin();
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('clogin/formlogin');
    }
}
