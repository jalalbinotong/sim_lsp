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
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
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
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function listskema()
    {
        $this->load->model('Mdata_skema_asesi');
        $datalist['hasil'] = $this->Mdata_skema_asesi->tampildata_skema();
        $data['konten'] = $this->load->view('Asesi/list_skema', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', '', TRUE);
        $this->Mstatus_frapl->tampildata();
        $this->load->view('header_dashboard', $data);
    }

    function pilihskema($id)
    {
        $this->load->model('Mdata_skema_asesi');
        $datalist['hasil'] = $this->Mdata_skema_asesi->pilihskema($id);
        redirect('Cdashboard_asesi/listskema');
    }
}
?>