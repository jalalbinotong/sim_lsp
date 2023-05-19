<?php
class Cdashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->mvalidasi->validasi_admin();
    }
    function dashboard()
    {
        $data['sidebar'] = $this->load->view('sidebar', '', TRUE);
        $data['konten'] = $this->load->view('dashboard', '', TRUE);
        $this->load->view('header', $data);
    }

    function data_pegawai()
    {
        $this->load->model('mdata_pegawai');
        $this->mdata_pegawai->tampil_data();
        $data['sidebar'] = $this->load->view('sidebar', '', TRUE);
        $data['tabel'] = $this->load->view('data_pegawai', '', TRUE);
        $data['konten'] = $this->load->view('konten_kosong', '', TRUE);
        $this->load->view('header', $data);
    }

    function fail_login()
    {
?>
        <meta http-equiv='refresh' content='0; URL=http://localhost/simlsp/clogin/formlogin'>
<?php
    }
}
?>