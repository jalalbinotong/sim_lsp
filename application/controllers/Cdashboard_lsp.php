<?php
class Cdashboard_lsp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->load->model('mdata_skema');
        $this->load->model('mdata_kegiatan');
        $this->load->model('mkompetensi');
        $this->mvalidasi->validasi_lsp();
    }
    function dashboard()
    {
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        $data['konten'] = $this->load->view('Pegawai/dashboard_lsp', '', TRUE);
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

    function listdataasesi_disetujui()
    {
        $this->load->model('Mtampil_data_asesi');
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata_user_disetujui();
        $data['konten'] = $this->load->view('Pegawai/list_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function listdataasesi_ditolak()
    {
        $this->load->model('Mtampil_data_asesi');
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata_user_ditolak();
        $data['konten'] = $this->load->view('Pegawai/list_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function listdataasesi_menunggu()
    {
        $this->load->model('Mtampil_data_asesi');
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata_user_menunggu();
        $data['konten'] = $this->load->view('Pegawai/list_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }
    function verifdataasesi($id)
    {
        $this->load->model('Mtampil_data_asesi');
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata($id);
        $data['konten'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function setuju_verifdataasesi($id)
    {
        $this->load->model('Mtampil_data_asesi');
        $this->Mtampil_data_asesi->setuju($id);
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata($id);
        $data['konten'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function tolak_verifdataasesi($id)
    {
        $this->load->model('Mtampil_data_asesi');
        $this->Mtampil_data_asesi->tolak($id);
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata($id);
        $data['konten'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    // function verifdataasesi()
    // {
    //     $this->load->model('Mtampil_data_asesi');
    //     $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata();
    //     $data['konten'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
    //     $this->load->view('header', $data);
    // }

    function tampildataasesi()
    {
        $datalist['hasil'] = $this->Mtampil_data_asesi->tampildata();
        // $data['hasil'] = $this->load->view('data_verifikasi_asesi',$datalist,TRUE);
        $data['tabel'] = $this->load->view('Pegawai/data_verifikasi_asesi', $datalist, TRUE);
    }


    //Kode Untuk data skema
    function data_skema()
    {
        $this->load->model('Mdata_jurusan');
        $listjurusan['hasil'] = $this->Mdata_jurusan->listjurusan();

        $datalist['hasil'] = $this->mdata_skema->tampildata_skema();
        $data['konten'] = $this->load->view('Pegawai/data_skema', $listjurusan, TRUE);
        $data['tabel'] = $this->load->view('Pegawai/tabeldata_skema', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        }
        if (@$this->session->userdata('tipe_user') == 'admin') {
            $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
            $this->load->view('header_dashboard', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function hapusdata($id_skema)
    {
        $this->mdata_skema->hapusdata($id_skema); //panggil fungsi
        redirect('cdashboard_lsp/data_skema');
    }

    function editdata($id_skema)
    {
        $this->mdata_skema->editdata($id_skema);
    }

    function simpandata()
    {
        $this->mdata_skema->simpandata(); //panggil fungsi

        redirect('Cdashboard_lsp/data_skema');
    }

    //Kode Untuk data kegiatan
    function data_kegiatan()
    {
        $listskema['hasil'] = $this->mdata_skema->tampildata_skema();
        $datalist['hasil'] = $this->mdata_kegiatan->tampildata_kegiatan();

        $data['konten'] = $this->load->view('Pegawai/data_kegiatan', $listskema, TRUE);
        $data['tabel'] = $this->load->view('Pegawai/tabeldata_kegiatan', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        }
        if (@$this->session->userdata('tipe_user') == 'admin') {
            $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
            $this->load->view('header_dashboard', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function hapusdata_kegiatan($id_jadwal)
    {
        $this->mdata_kegiatan->hapusdata_kegiatan($id_jadwal); //panggil fungsi
        redirect('cdashboard_lsp/data_kegiatan');
    }

    function editdata_kegiatan($id_jadwal)
    {
        $this->mdata_kegiatan->editdata_kegiatan($id_jadwal);
    }

    function simpandata_kegiatan()
    {
        $this->mdata_kegiatan->simpandata_kegiatan(); //panggil fungsi

        redirect('Cdashboard_lsp/data_kegiatan');
    }

    // function kompetensi
    function data_kompetensi()
    {
        $listskema['hasil'] = $this->mdata_skema->tampildata_skema();
        $datalist['hasil'] = $this->mkompetensi->tampildata_kompetensi();

        $data['konten'] = $this->load->view('Pegawai/kompetensi', $listskema, TRUE);
        $data['tabel'] = $this->load->view('Pegawai/tabel_kompetensi', $datalist, TRUE);
        $data['sidebar'] = $this->load->view('Pegawai/sidebar_lsp', '', TRUE);
        if (@$this->session->userdata('tipe_user') == '') {
            $this->load->view('header', $data);
        }
        if (@$this->session->userdata('tipe_user') == 'admin') {
            $data['sidebar'] = $this->load->view('Admin/sidebar', '', TRUE);
            $this->load->view('header_dashboard', $data);
        } else {
            $this->load->view('header_dashboard', $data);
        }
    }

    function hapusdata_kompetensi($id_kompetensi)
    {
        $this->mkompetensi->hapusdata_kompetensi($id_kompetensi); //panggil fungsi
        redirect('cdashboard_lsp/data_kompetensi');
    }

    function editdata_kompetensi($id_kompetensi)
    {
        $this->mkompetensi->editdata_kompetensi($id_kompetensi);
    }

    function simpandata_kompetensi()
    {
        $this->mkompetensi->simpandata_kompetensi(); //panggil fungsi

        redirect('Cdashboard_lsp/data_kompetensi');
    }
}
?>