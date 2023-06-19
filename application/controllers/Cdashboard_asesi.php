<?php
class Cdashboard_asesi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('Mstatus_frapl');
        $this->load->model('Statusmodel');
        
    }
    function dashboard()
    {
        $this->Mstatus_frapl->tampildata();
        $status = $this->Statusmodel->getStatus();
        $data['status'] = $status;
        
        $data['sidebar'] = $this->load->view('Asesi/sidebar_asesi', $data, TRUE);
        $data['konten'] = $this->load->view('Asesi/dashboard_asesi', '', TRUE);
        $data['tipe_user'] = $this->session->userdata('tipe_user');
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_dashboard',$data);
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
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_dashboard',$data);
            }
    }
    
 
}
?>