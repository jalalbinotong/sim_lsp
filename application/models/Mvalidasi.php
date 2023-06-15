<?php
	class Mvalidasi extends CI_Model
	{
        function validasi_admin()
		{
		if ($this->session->userdata('tipe_user')!='admin')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
				redirect('clogin/formlogin','refresh');
			}
		}
			function validasi_lsp()
    {
        if ($this->session->userdata('tipe_user') == 'lsp') {
        } else if ($this->session->userdata('tipe_user') == 'admin') {
        } else {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }

    		function validasi_asesi()
    {
        if ($this->session->userdata('tipe_user') != 'asesi') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }


				
}	

?>