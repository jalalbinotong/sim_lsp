<?php
class Cdashboard_lsp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->mvalidasi->validasi_lsp();
        
    }
    function dashboard()
    {   
        $data['sidebar'] = $this->load->view('sidebar_lsp', '', TRUE);
        $data['konten'] = $this->load->view('dashboard_lsp', '', TRUE);
        $data['tipe_user'] = $this->session->userdata('tipe_user');
        $this->load->view('header', $data);
    }
    
    function fail_login()
    {   
        ?>
        <meta http-equiv='refresh' content='0; URL=http://localhost/simlsp/clogin/formlogin'>
        <?php
    }

    function verifdataasesi()
    {
        $this->load->model('Mtampil_data_asesi');
        $datalist['hasil']=$this->Mtampil_data_asesi->tampildata();
        $data['tabel']=$this->load->view('data_verifikasi_asesi',$datalist,TRUE);
        $this->load->view('header', $data);
    }
    function tampildataasesi()
    {
        $datalist['hasil']=$this->Mtampil_data_asesi->tampildata();
        // $data['hasil'] = $this->load->view('data_verifikasi_asesi',$datalist,TRUE);
        $data['tabel']=$this->load->view('data_verifikasi_asesi',$datalist,TRUE);
    }
}
?>
