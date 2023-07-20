<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(20, 15, 20, true);
$pdf->setPrintHeader(false);
$pdf->AddPage('');
$pdf->SetFont('');
$pdf->SetDisplayMode('real', 'default');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);





// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


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

define('K1_PATH_IMAGES', dirname(__FILE__) . '/../images/');
$imageFile1 = K_PATH_IMAGES . 'bnsps.jpg';
$pageWidth = $pdf->getPageWidth();
$margins = $pdf->getMargins();
$imageWidth = 56; // Lebar gambar yang diinginkan
$x1 = $pageWidth - $margins['right'] - $imageWidth;
$y1 = -6;
$pdf->Image($imageFile1, $x1, $y1, $imageWidth, 0, '', '', 'R', false, 300, '', false, false, 0, false, false, false, '');



$html = "
		
<b>FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI </b><br>
<br>

<b>Bagian 1 : Rincian Data Pemohon Sertifikasi</b> <br>
Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada
saat ini.<br>
<br>
<b>A. Data Pribadi </b><br>
<br>
Nama Lengkap : <b>$hasil->nama_lengkap </b> <br>
<br>
No.KTP/NIK/Paspor :  <b>$hasil->no_ktp </b><br>
<br>
Tempat/Tgl Lahir : <b>$hasil->tgl_lahir </b><br>
<br>
Jenis Kelamin : <b>$hasil->jenis_kelamin </b><br>
<br>
Kebangsaan : <b>$hasil->kebangsaan </b><br>
<br>
Alamat Rumah : <b>$hasil->alamat </b><br>
<br>
No. Telepon/HP : <b>$hasil->telpon_hp </b><br>
<br>
Email : <b>$hasil->email </b><br>
<br>
Kantor : <b>$hasil->telpon_kantor </b><br>
<br>
Kualifikasi pendidikan : <b>$hasil->kualifikasi_pendidikan </b><br>
<br>
<b>B. Data Pekerjaan Sekarang </b><br>
<br>
Nama Institusi/Perusahaan : <b>$hasil->nama_institusi  </b><br>
<br>
jabatan : <b>$hasil->jabatan </b><br>
<br>
Alamat Kantor : <b>$hasil->alamat_kantor </b><br>
<br>
No. Telp : <b> +62 (0361)701981 </b>    <br>
<br>
Email : <b> poltek@pnb.ac.id </b> <br>
<br>
<b>A. Bagian 2 : Data Sertifikasi </b><br>
";







$Nama = 'Form-' . "PDF";
$pdf->SetTitle($Nama);
$pdf->writeHTML($html);
$pdf->Output($Nama, 'I');
