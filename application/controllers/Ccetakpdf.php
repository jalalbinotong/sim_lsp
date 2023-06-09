<?php
class Ccetakpdf extends CI_Controller
{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('Pdf');
		}
		
		function pdf()
		{
			$this->load->view('Asesi/halaman_pdf');	
		}
		
	}
?>
