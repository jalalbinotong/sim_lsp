<?php
    	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT,'A4', true, 'UTF-8', false);
		$pdf->setPrintFooter(false);
		$pdf->SetMargins(20, 15, 20, true);
		$pdf->setPrintHeader(false);
		$pdf->AddPage('');
		$pdf->SetFont('');
		$pdf->SetDisplayMode('real', 'default');
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);





// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('times', '', 10);


// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

define('K1_PATH_IMAGES', dirname(__FILE__).'/../images/');
$imageFile1 = K_PATH_IMAGES . 'bnsps.jpg';
$pageWidth = $pdf->getPageWidth();
$margins = $pdf->getMargins();
$imageWidth = 56; // Lebar gambar yang diinginkan
$x1 = $pageWidth - $margins['right'] - $imageWidth;
$y1 = -6;
$pdf->Image($imageFile1, $x1, $y1, $imageWidth, 0, '', '', 'R', false, 300, '', false, false, 0, false, false, false, '');



 $html="
		
<b>FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI </b><br>
<br>

<b>Bagian 1 : Rincian Data Pemohon Sertifikasi</b> <br>
Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada
saat ini.<br>
<br>
<b> A. Data Pribadi </b><br>
<br>
Nama Lengkap : <br>
<br>
No.KTP/NIK/Paspor : <br>
<br>
Tempat/Tgl Lahir : <br>
<br>
Jenis Kelamin : 	Laki-laki/Wanita *) <br>
<br>
Kebangsaan : <br>
<br>
Alamat Rumah : <br>
<br>
Kode Pos : <br>
<br>
No. Telepon/HP : <br>
<br>
Email : <br>
<br>
Kantor : <br>
<br>
Kualifikasi pendidikan : <br>
<br>
*Coret Yang Tidak Perlu<br>
<br>
<b> B. Data Pekerjaan Sekarang </b><br>
<br>
Nama Institusi/Perusahaan : <br>
<br>
jabatan : <br>
<br>
Alamat Kantor : <br>
<br>
Kode Pos : <br>
<br>
No. Telp/fax/E-mail : <br>
<br>
Email : <br>
<br>
<b> A. Bagian 2 : Data Sertifikasi </b><br>
<table class='table'>
<tr>
<th> No. </th>
<th> email </th>
<th> Kantor </th>
</tr>
<tr>
<td> 1 </td>
<td> user@example.com </td>
<td> Company A </td>
</tr>
<tr>
<td> 2 </td>
<td> test@example.com </td>
<td> Company B </td>
</tr>
</table>
";


	
		
		
		
		
		$Nama='Form-'."PDF";
		$pdf->SetTitle($Nama);
		$pdf->writeHTML($html);
		$pdf->Output($Nama, 'I');
