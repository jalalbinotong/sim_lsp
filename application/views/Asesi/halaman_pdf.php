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
		<br>
		a. Data Pribadi <br>

   Nama lengkap                  : <br>

   No. KTP/NIK/Paspor            : <br>

   Tempat / tgl. Lahir           : <br>

   Jenis kelamin                 :   Laki-laki / Wanita *)

   Kebangsaan                    :

                                 :
   Alamat rumah
                                                              Kode pos :

                                 :   Rumah :                  Kantor :
   No. Telepon/E-mail
                                 :   HP :                     E-mail :

   Kualifikasi Pendidikan        :
 *Coret yang tidak perlu

b. Data Pekerjaan Sekarang

    Nama Institusi /         :
    Perusahaan

    Jabatan                  :

    Alamat Kantor            :

                                                             Kode pos :
    No. Telp/Fax/E-mail      :       Telp :                  Fax :
                                     E-mail :
       Bagian 2 : Data Sertifikasi

                               Judul     :   JUNIOR NETWORK ADMINITRATOR
  Skema Sertifikasi
  (SKKNI/Okupasi/Klaster)      Nomor     :       FR SKEMA-02-TE-JNA
  Tujuan Asesmen                         :       Sertifikasi
                                                 Sertifikasi Ulang
                                                 Pengakuan Kompetensi Terkini (PKT)
                                                 Rekognisi Pembelajaran Lampau
                                                 Lainnya


Daftar Unit Kompetensi sesuai kemasan:
                                                                               Jenis Standar
                                                                                 (Standar
 No.           Kode Unit                         Judul Unit
                                                                              Khusus/Standar
                                                                           Internasional/SKKNI)

  1      J.611000.004.01        Merancang pengalamatan jaringan                  SKKNI

  2      J.611000.010.02        Memasang jaringan nirkabel                       SKKNI

  3      J.611000.012.02        Mengkonfigurasi switch pada jaringan.            SKKNI

  4                             Mengkonfigurasi routing pada perangkat
         J.611000.013.02                                                         SKKNI
                                jaringan dalam satu autonomous system.

  5                             Mengkonfigurasi routing pada perangkat
         J.611000.014.02                                                         SKKNI
                                jaringan antar autonomous system




                                                                                                  1
      Bagian 3 : Bukti Kelengkapan Pemohon
      Bukti Persyaratan Dasar Pemohon
                                                                    Ada
No.                   Bukti Persyaratan Dasar                               Tidak    Tidak Ada
                                                          Memenuhi
                                                                          Memenuhi
                                                           Syarat
                                                                           Syarat
 1.     Copy KTP Copy
                                                             ☐              ☐
 2.     Copy KTM
                                                             ☐              ☐
 3.     Pas foto 3x4 (4 lembar) latar merah
                                                             ☐              ☐
 4.     Copy Transkrip nilai sampai dengan semester 5
                                                             ☐              ☐
 5.     Copy Sertifikat/Surat Keterangan Praktek Kerja
        Lapangan/Magang
                                                             ☐              ☐
 6.     Sertifikat pelatihan keahlian dibidang Network
        Administrator bagi peserta hasil pelatihan
                                                             ☐              ☐


Rekomendasi (diisi oleh LSP):                             Pemohon/ Kandidat :
Berdasarkan ketentuan persyaratan dasar, maka             Nama
pemohon:
Diterima/ Tidak diterima *) sebagai peserta sertifikasi   Tanda tangan/
* coret yang tidak sesuai                                 Tanggal

Catatan :                                                 Admin LSP :
                                                          Nama
                                                          No. Reg

                                                          Tanda tangan/
                                                          Tanggal
		
		";
		
		
		
		
		
		
		
		$Nama='Form-'."PDF";
		$pdf->SetTitle($Nama);
		$pdf->writeHTML($html);
		$pdf->Output($Nama, 'I');	
?>