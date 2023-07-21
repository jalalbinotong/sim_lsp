<?php
class Ccetakpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function pdf()
    {
        $status = $this->cekStatusFromDatabase();

        if ($status === 'setuju') {
            // Proses pencetakan PDF

            $this->load->model('Mdata_pdf_asesi');
            $datalist['hasil'] = $this->Mdata_pdf_asesi->tampildata();
            $datalist['hasil2'] = $this->Mdata_pdf_asesi->tampildata_2();
            $this->load->view('Asesi/halaman_pdf', $datalist); // Misalnya, menggunakan library PDF di CodeIgniter
            // Kode untuk menghasilkan PDF
            // ...

            // Setelah mencetak PDF, Anda dapat mengirimkan PDF ke browser atau menyimpannya, sesuai kebutuhan Anda
        } elseif ($status === 'menunggu') {
            // Tampilkan pesan bahwa status masih menunggu persetujuan
            echo "Mohon tunggu hingga status menjadi setuju.";
        } else {
            // Tampilkan pesan bahwa status ditolak
            echo "Status akun Anda ditolak.";
        }
    }

    public function cekStatusFromDatabase()
    {
        // Mengambil status dari database, misalnya menggunakan model atau library database di CodeIgniter
        $this->load->model('Statusmodel'); // Gantikan "StatusModel" dengan model yang sesuai dengan struktur database Anda

        $status = $this->Statusmodel->getStatus(); // Gantikan "getStatus()" dengan method yang sesuai untuk mendapatkan status dari database

        return $status;
    }
}
