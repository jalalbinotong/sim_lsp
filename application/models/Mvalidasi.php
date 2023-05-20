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
        if ($this->session->userdata('tipe_user') != 'lsp') {
            echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
            redirect('clogin/formlogin', 'refresh');
        }
    }
				
}	

?>