<?php
	class Mdata_pegawai extends CI_Model
	{
        function tampil_data()
		{
            $this->load->library('table');
            $this->table->set_heading(array('NIP', 'Nama', 'Kelamin', 'tempat lahir', 'tgl lahir', 'nomor hp','alamat','email','jabatan','golongan'));

            $template = array(
                'table_open' => '<table border="2" cellpadding="4" cellspacing="1"">',
              );
        
              $this->table->set_template($template);
		}
	}
?>