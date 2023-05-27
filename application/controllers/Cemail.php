<?php
class Cemail extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('mvalidasi');
    //     $this->mvalidasi->validasi_admin();
    // }
    function index()
    {
        $this->load->library('email');

        // Cofiguration of EMAIL SMPTP
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'dossnarcos@gmail.com';
        $config['smtp_pass'] = 'ckprgvoayassdkxx';
        $config['smtp_crypto'] = 'tls';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";

        $this->email->smtp_ssl = false;
        $this->email->initialize($config);

        $this->email->from('dossnarcos@gmail.com');
        $this->email->to('utomorafi207@gmail.com');
        $this->email->subject('Test Email');
        $this->email->message('This is a test email.');

        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            $errors = $this->email->print_debugger();
            print_r($errors);
            echo 'Email sending failed.';
        }

        // Menampilkan format JSON ke tampilan WEB
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'nama' => 'Rafi Faridz',
                'nim' => '12345'
            )));
    }
}
?>