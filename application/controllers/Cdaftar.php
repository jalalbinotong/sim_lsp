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
        $data['konten'] = $this->load->view('formdaftar', '', TRUE);
        $this->load->view('header', $data);
    }

    function prosesdaftarlsp()
    {
        $this->mdaftar->prosesdaftar_lsp();
        redirect('Cdashboard/tambah_akun_pegawai');
    }

    function prosesdaftar()
    {
        $this->mdaftar->prosesdaftar();
        $this->load->model('Memail');
    }

    function input_FRAPL()
    {
        $this->load->model('mfrapl');
        $this->mfrapl->input_FRAPL();
        redirect('Cdashboard_asesi/FRAPL');
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
