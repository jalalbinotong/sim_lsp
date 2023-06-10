<?php
class Cdashboard_lsp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdata_skema');
        $this->load->model('mdata_kegiatan');
        $this->mvalidasi->validasi_lsp();
    }
    function dashboard()
    {
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        $data['konten'] = $this->load->view('Pegawai/dashboard_lsp', '', TRUE);
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
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata();
        $data['konten'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
        $this->load->view('header', $data);
    }

    function tampildataasesi()
    {
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata();
        // $data['hasil'] = $this->load->view('data_verifikasi_asesi',$datalist,TRUE);
        $data['tabel'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
    }


    //Kode Untuk data skema
    function data_skema()
    {

        $datalist['hasil'] = $this->mdata_skema->tampildata_skema();
        $data['konten'] = $this->load->view('Pegawai/data_skema', '', TRUE);
        $data['tabel'] = $this->load->view('Pegawai/tabeldata_skema', $datalist, TRUE);
        $this->load->view('header', $data);
    }

    function hapusdata($id_skema)
		{
			$this->mdata_skema->hapusdata($id_skema); //panggil fungsi
			redirect('cdashboard_lsp/tabeldata_skema');
		}	

		function editdata($id_skema)
		{
			$this->mdata_skema->editdata($id_skema);		
		}


     //Kode Untuk data kegiatan
    function data_kegiatan()
    {

        $datalist['hasil'] = $this->mdata_kegiatan->tampildata_kegiatan();

        $data['konten'] = $this->load->view('Pegawai/data_kegiatan', '', TRUE);
        $data['tabel'] = $this->load->view('Pegawai/tabeldata_kegiatan', $datalist, TRUE);
        $this->load->view('header', $data);
    }

    function simpandata()
    {
        $this->mdata_skema->simpandata(); //panggil fungsi

        redirect('Cdashboard_lsp/data_skema');
    }

    function simpandata_kegiatan()
    {
        $this->mdata_kegiatan->simpandata_kegiatan(); //panggil fungsi

        redirect('Cdashboard_lsp/data_kegiatan');
    }
}
?>