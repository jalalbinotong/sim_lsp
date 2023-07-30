<?php
class Cmain extends CI_Controller
{
    function tampilheader()
    {
        $this->load->view('header');
        
    }

    function tampilberanda()
    {
        $data['beranda'] = $this->load->view('kontenberanda', '', TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }
}
