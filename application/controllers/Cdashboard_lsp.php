<?php
class Cdashboard_lsp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdata_skema');
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
    function data_skema()
    {
        
        $datalist['hasil']= $this->mdata_skema->tampildata_skema();
        $data['konten'] = $this->load->view('data_skema', '', TRUE);
        $data['tabel']=$this->load->view('tabeldata_skema',$datalist,TRUE);
        $this->load->view('header', $data);
        
    }
    
    function simpandata()
		{
			$this->mdata_skema->simpandata(); //panggil fungsi
			
			redirect('Cdashboard_lsp/data_skema');
		}
}
?>
