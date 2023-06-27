<?php
class cmasterdata_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdata_skema');
        $this->load->model('mdata_kegiatan');
        $this->mvalidasi->validasi_lsp_data();
    }

    function masterdata_pegawai()
    {
        $data['konten'] = $this->load->view('Admin/masterdata_pegawai', '', TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_dashboard',$data);
            }
    }
}