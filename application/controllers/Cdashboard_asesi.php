<?php
class Cdashboard_asesi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('Mstatus_frapl');
    }
    function dashboard()
    {
        $this->Mstatus_frapl->tampildata();
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', '', TRUE);
        $data['konten'] = $this->load->view('Asesi/dashboard_asesi', '', TRUE);
        $data['tipe_user'] = $this->session->userdata('tipe_user');
        $this->load->view('header', $data);
    }

    function fail_login()
    {
?>
        <meta http-equiv='refresh' content='0; URL=http://localhost/simlsp/clogin/formlogin'>
<?php
    }
    function FRAPL()
    {
        $this->Mstatus_frapl->tampildata();
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', '', TRUE);
        $data['konten'] = $this->load->view('Asesi/FRAPL', '', TRUE);
        $this->load->view('header', $data);
    }
}
?>