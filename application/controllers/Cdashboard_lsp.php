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
        $this->load->view('tampilanawal', $data);
    }

    function fail_login()
    {   
        ?>
        <meta http-equiv='refresh' content='0; URL=http://localhost/simlsp/clogin/formlogin'>
        <?php
    }
}
?>