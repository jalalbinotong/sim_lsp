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
        $subject = 'Verifikasi Akun Sertifikasi LSP';
        $message = 'Kepada Asesi,<br /><br />Untuk mengaktifkan akun, harap menuju ke link berikut.<br /><br /> 
        http://localhost/simlsp/cdaftar/verifikasi/' . md5($to_email) .
            '<br /><br /><br />Terimakasih<br />SIMLSP PNB';

        // Cofiguration of EMAIL SMPTP
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'ocxuddnynohcqmbf';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";

        $this->email->smtp_ssl = true;
        $this->email->initialize($config);

        $this->email->from('SIMLSP@pnb.ac.id');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();

        // if ($this->email->send()) {
        //     echo 'Email sent successfully.';
        // } else {
        //     $errors = $this->email->print_debugger();
        //     print_r($errors);
        //     echo 'Email sending failed.';
        // }

        // // Menampilkan format JSON ke tampilan WEB
        // $this->output
        //     ->set_content_type('application/json')
        //     ->set_output(json_encode(array(
        //         'nama' => 'Rafi Faridz',
        //         'nim' => '12345'
        //     )));
    }

    function verifikasi()
    {
        if (empty($this->uri->segment(3))) {
            echo 'error';
        } else {
            $key = $this->uri->segment(3);
            $key_data = $this->db->get_where('tb_user_temp', array('key_md5' => $key));

            if ($key_data->num_rows() > 0) {
                
            
                foreach ($key_data->result_array() as $data) {
                    //tb_user
                    $user['id_user'] = $data['id_user'];
                    $user['nama_lengkap'] = $data['nama_lengkap'];
                    $user['email'] = $data['email'];
                    $user['password'] = $data['password'];
                    $user['tipe_user'] = 'asesi';

                    //tb_asesi
                    $asesi['id_user'] = $data['id_user'];
                    $asesi['id_prodi'] = $data['id_prodi'];
                    $asesi['nim'] = $data['nim'];
                    $asesi['id_skema'] = '9999';

                    
                    if ($key_data->num_rows() > 0) {
                        $this->db->trans_start();
                        $this->db->insert('tb_user', $user);
                        $this->db->delete('tb_user_temp', array('id_user' => $user['id_user']));
                        $this->db->insert('tb_asesi', $asesi);
                        $this->db->trans_complete();
                    }
                }
            }



        }


    }
}
?>