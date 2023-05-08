<?php
class Cbelajarcrud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mbelajarcrud');
    }

    function formdata()
    {
        // menyimpan view form daftar di array data -->konten
        $data['konten'] = $this->load->view('belajarcrud', '', TRUE);


        $datalist['hasil'] = $this->mbelajarcrud->tampildata();
        $data['tabel'] = $this->load->view('tabeldata', $datalist, TRUE);

        //kirim konten ke halaman utama --> tampilawal
        $this->load->view('tampilanawal', $data);
    }

    function simpandata()
    {
        $this->mbelajarcrud->simpandata(); //tampilkan kembali view
        redirect('cbelajarcrud/formdata');
        //$this->formdata();	 //tampilkan kembali view
    }

    function hapusdata($KodeData)
    {
        $this->mbelajarcrud->hapusdata($KodeData);
        redirect('cbelajarcrud/formdata');
    }

    function editdata($KodeData)
    {
        $this->mbelajarcrud->editdata($KodeData);
    }
}
