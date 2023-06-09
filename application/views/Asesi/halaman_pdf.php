<?php
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT,'A3', true, 'UTF-8', false);
		$pdf->setPrintFooter(false);
		$pdf->SetMargins(20, 15, 20, true);
		$pdf->setPrintHeader(false);
		$pdf->AddPage('');
		$pdf->SetFont('');
		$pdf->SetDisplayMode('real', 'default');
		
		$html="FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI <br>
		Bagian 1 : Rincian Data Pemohon Sertifikasi
		Pada bagian ini, cantumlan data pribadi, data pendidikan formal serta data pekerjaan anda pada
		saat ini.
		
		";
		
		
		
		
		
		
		
		$Nama='Form-'."PDF";
		$pdf->SetTitle($Nama);
		$pdf->writeHTML($html);
		$pdf->Output($Nama, 'I');	
?>