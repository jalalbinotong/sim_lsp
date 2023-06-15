<?php

class Cdaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdaftar');
        $this->load->model('memail');
    }

    function formdaftar()
    {
        //menyimpan view form daftar di array data -->konten
        $data['konten'] = $this->load->view('formdaftar', '', TRUE);
        //kirim konten ke halaman utama --> tampilawal
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function prosesdaftarlsp()
    {
        $this->mdaftar->prosesdaftar_lsp();
        redirect('cdaftar/tampilformdaftar_lsp');
    }

    function tampilformdaftar_lsp()
    {
        $data['konten'] = $this->load->view('Admin/tambah_akun_pegawai', '', TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function prosesdaftar()
    {
        $this->mdaftar->prosesdaftar();
        // $this->mdaftar_asesi->prosesdaftar_asesi();
        $this->load->model('Memail');
    }
    function prosesdaftarasesi()
    {
        $this->load->model('mdaftarAsesi');
        $this->mdaftarAsesi->prosesdaftarasesi();
        // $this->memail->sendEmail();
        redirect('Cdashboard_asesi/input_asesi');
    }
    function FRAPL()
    {
        $data['konten'] = $this->load->view('Asesi/FRAPL', '', TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function verifikasi()
    {
        $this->load->model('Memail');
        $this->Memail->verifikasi();
    }

    // //set validation rules
    // $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
    // $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
    // $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
    // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

    // //validate form input
    // if ($this->form_validation->run() == FALSE)
    // {
    //     // fails
    //     $this->load->view('user_registration_view');
    // }
    // else{}
}
