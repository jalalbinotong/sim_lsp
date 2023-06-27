<?php
class Cdashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('makun_pegawai');
        $this->mvalidasi->validasi_admin();
    }
    function dashboard()
    {
        $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
        $data['konten'] = $this->load->view('Admin/dashboard', '', TRUE);
        $data['tipe_user'] = $this->session->userdata('tipe_user');
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function data_pegawai()
    {
        $this->load->model('mdata_pegawai');
        $datalist['hasil'] = $this->mdata_pegawai->tampil_data();
        $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
        // $data['konten'] = $this->load->view('dashboard', '', TRUE);
        $data['konten'] = $this->load->view('Admin/data_pegawai', $datalist, TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_login',$data);
            }
    }

    function tambah_akun_pegawai()
    {
        $data['konten'] = $this->load->view('Admin/tambah_akun_pegawai', '', TRUE);
        $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_dashboard',$data);
            }
    }

    function tabelakun_pegawai()
    {
        $this->load->model('Makun_pegawai');
        $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
        $datalist['hasil'] = $this->Makun_pegawai->akun_pegawai();
        // $data['hasil'] = $this->load->view('data_verifikasi_asesi',$datalist,TRUE);
        $data['konten'] = $this->load->view('Admin/tabelakun_pegawai', $datalist, TRUE);
        if (@$this->session->userdata('tipe_user')=='')
			{
				$this->load->view('header',$data);
			} else {
                $this->load->view('header_dashboard',$data);
            }
    }

    function hapusakun_pegawai($id_user)
    {
        $this->makun_pegawai->hapusakun_pegawai($id_user); //panggil fungsi
        redirect('cdashboard/tabelakun_pegawai');
    }

    function fail_login()
    {
?>
        <meta http-equiv='refresh' content='0; URL=http://localhost/simlsp/clogin/formlogin'>
<?php
    }
}
?>