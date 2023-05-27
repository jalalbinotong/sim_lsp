<?php
class Memail extends CI_Model
{
    public function __construct()
    {
    //     parent::__construct();
    //     $this->load->model('mvalidasi');
    //     $this->mvalidasi->validasi_admin();
    }
    function sendEmail($to_email)
    {
        $this->load->library('email');

        $from_email = 'simlsppnb@gmail.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.mydomain.com/user/verify/ 
        //. md5($to_email) . 
        <br /><br /><br />Thanks<br />Mydomain Team';

        // Cofiguration of EMAIL SMPTP
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'LSPPNB2023';
        $config['smtp_crypto'] = 'tls';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";

        $this->email->smtp_ssl = false;
        $this->email->initialize($config);

        $this->email->from('simlsppnb@gmail.com');
        $this->email->to('$to_email');
        $this->email->subject($subject);
        $this->email->message($message);

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