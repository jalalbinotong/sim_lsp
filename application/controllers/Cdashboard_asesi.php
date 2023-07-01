<?php
class Cdashboard_asesi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('Mstatus_frapl');
        $this->load->model('Statusmodel');
        $this->mvalidasi->validasi_asesi();
    }
    function dashboard()
    {
        $this->Mstatus_frapl->tampildata();
        $status = $this->Statusmodel->getStatus();
        $data['status'] = $status;

        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', $data, TRUE);
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
        $status = $this->Statusmodel->getStatus();
        $data['status'] = $status;
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', $data, TRUE);
        $data['konten'] = $this->load->view('Asesi/FRAPL', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function listskema()
    {
        $this->Mstatus_frapl->tampildata();
        $status = $this->Statusmodel->getStatus();
        $data['status'] = $status;
        $this->load->model('Mdata_skema_asesi');
        $datalist['hasil'] = $this->Mdata_skema_asesi->tampildata_skema();
        $data['konten'] = $this->load->view('Asesi/list_skema', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', $data, TRUE);
        $this->Mstatus_frapl->tampildata();
        $this->load->view('header_dashboard', $data);
    }

    function pilihskema($id)
    {
        $this->load->model('Mdata_skema_asesi');
        $datalist['hasil'] = $this->Mdata_skema_asesi->pilihskema($id);
        $this->Mstatus_frapl->tampildata();
        redirect('Cdashboard_asesi/listskema');
    }

    function listjadwal()
    {
        $this->Mstatus_frapl->tampildata();
        $status = $this->Statusmodel->getStatus();
        $data['status'] = $status;
        $this->load->model('Mdata_jadwal_asesi');
        $datalist['hasil'] = $this->Mdata_jadwal_asesi->tampildata_jadwal();
        $data['konten'] = $this->load->view('Asesi/list_jadwal', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', $data, TRUE);
        $this->Mstatus_frapl->tampildata();
        $this->load->view('header_dashboard', $data);
    }

    function pilihjadwal($id)
    {
        $this->load->model('Mdata_jadwal_asesi');
        $datalist['hasil'] = $this->Mdata_jadwal_asesi->pilihjadwal($id);
        $this->Mstatus_frapl->tampildata();
        redirect('Cdashboard_asesi/listjadwal');
    }
}
?>