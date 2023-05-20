<?php
class Credirect extends CI_Controller
{
    function validasi_dashboard()
    {
        if ($this->session->userdata('tipe_user') == 'admin') {
            redirect('cdashboard/dashboard');
        } else if ($this->session->userdata('tipe_user') == 'lsp') {
            redirect('cdashboard_lsp/dashboard');
        } else {
            redirect('cmain/tampilberanda');
        }
    }
}
?>