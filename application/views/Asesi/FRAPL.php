<script language="javascript">
    function prosesdaftarasesi() {


        var foto_ktp = $('#foto_ktp').val();
        if (foto_ktp == "") {

            alert("foto ktp masih kosong");
            $('#foto_ktp').focus();
            return false;
        }

        var bukti_pembayaran = $('#bukti_pembayaran').val();
        if (bukti_pembayaran == "") {

            alert("bukti pembayaran masih kosong");
            $('#bukti_pembayaran').focus();
            return false;
        }

        var foto = $('#foto').val();
        if (foto == "") {

            alert("no ktp masih kosong");
            $('#foto').focus();
            return false;
        }

        var no_ktp = $('#no_ktp').val();
        if (no_ktp == "") {

            alert("no ktp masih kosong");
            $('#no_ktp').focus();
            return false;
        }

        var tempat_lahir = $('#tempat_lahir').val();
        if (tempat_lahir == "") {

            alert("tempat lahir masih kosong");
            $('#tempat_lahir').focus();
            return false;
        }
        var tgl_lahir = $('#tgl_lahir').val();
        if (tgl_lahir == "") {

            alert("tgl lahir masih kosong");
            $('#tgl_lahir').focus();
            return false;
        }
        var kebangsaan = $('#kebangsaan').val();
        if (kebangsaan == "") {

            alert("kebangsaan masih kosong");
            $('#kebangsaan').focus();
            return false;
        }
        var alamat = $('#alamat').val();
        if (alamat == "") {

            alert("alamat masih kosong");
            $('#alamat').focus();
            return false;
        }
        var telpon_hp = $('#telpon_hp').val();
        if (telpon_hp == "") {

            alert("no telepon masih kosong");
            $('#telpon_hp').focus();
            return false;
        }
        var telpon_rumah = $('#telpon_rumah').val();
        if (telpon_rumah == "") {

            alert("no telepon rumah masih kosong");
            $('#telpon_rumah').focus();
            return false;
        }
        var telpon_kantor = $('#telpon_kantor').val();
        if (telpon_kantor == "") {

            alert("no kantor masih kosong");
            $('#telpon_kantor').focus();
            return false;
        }
        var kualifikasi_pendidikan = $('#kualifikasi_pendidikan').val();
        if (kualifikasi_pendidikan == "") {

            alert("kualifikasi pendidikan masih kosong");
            $('#kualifikasi_pendidikan').focus();
            return false;
        }
        var nama_institusi = $('#nama_institusi').val();
        if (nama_institusi == "") {

            alert("nama Institusi masih kosong");
            $('#nama_institusi').focus();
            return false;
        }
        var jabatan = $('#jabatan').val();
        if (jabatan == "") {

            alert("jabatan masih kosong");
            $('#jabatan').focus();
            return false;
        }
        var alamat_kantor = $('#alamat_kantor').val();
        if (alamat_kantor == "") {

            alert("alamat kantor masih kosong");
            $('#alamat_kantor').focus();
            return false;
        }
        $('#FRAPL').submit();
    }
</script>


<body>
    <main id="main" class="main">
        <!-- <main class="d-flex w-100"> -->
        <div class="container">
            <!-- <div class="row vh-100"> -->
            <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
                <!-- <div class="d-table-cell align-middle"> -->

                <div class="text-center mt-4">
                    <h1 class="h2">Upload Data</h1>
                    <p class="lead">
                        Silahkan Lengkapi Data Anda!
                    </p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <br />
                            <?php
                            $pesan = $this->session->flashdata('pesan');
                            if ($pesan == "") {
                                echo "";
                            } else {
                            ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong><?php echo $pesan; ?></strong>
                                </div>

                            <?php
                            }
                            ?>
                            <form id="FRAPL" name="FRAPL" method="post" action="<?php echo base_url('cdaftar/prosesdaftarasesi'); ?>">
                                <div class="mb-3">
                                    <input type="hidden" name="id_asesi" id="id_asesi" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Fotocopy KTP </label>
                                    <input type="file" class="form-control" id="foto_ktp" placeholder="upload" name="foto_ktp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="bukti_pembayaran" placeholder="Upload" name="bukti_pembayaran">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pas Foto</label>
                                    <input type="file" class="form-control" id="foto" placeholder="Upload Pas Foto" name="foto">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No KTP</label>
                                    <input type="teks" class="form-control" id="no_ktp" placeholder="Masukkan Nomor Ktp" name="no_ktp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir">
                                </div>
                                <div class="mb-3">
                                    Pilih Jenis Kelamin: <br>
                                    <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
                                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kebangsaan</label>
                                    <input type="text" class="form-control" id="Kebangsaan" placeholder="Masukkan Kebangsaan Anda" name="kebangsaan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telepon HP</label>
                                    <input type="number" class="form-control" id="telpon_hp" placeholder="Masukkan No telepon Anda" name="telpon_hp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telepon Rumah</label>
                                    <input type="number" class="form-control" id="telpon_rumah" placeholder="Masukkan No telepon Rumah Anda" name="telpon_rumah">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telepon Kantor</label>
                                    <input type="number" class="form-control" id="telpon_kantor" placeholder="Masukkan No telepon Kantor Anda" name="telpon_kantor">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kualifikasi Pendidikan</label>
                                    <input type="teks" class="form-control" id="kualifikasi_pendidikan" placeholder="Masukkan Kualifikasi Pendidikan Anda" name="kualifikasi_pendidikan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Institusi/Perusahaan</label>
                                    <input type="teks" class="form-control" id="nama_institusi" placeholder="Masukkan Nama Institusi Anda" name="nama_institusi">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <input type="teks" class="form-control" id="jabatan" placeholder="Masukkan Kualifikasi Pendidikan Anda" name="jabatan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat Kantor</label>
                                    <input type="teks" class="form-control" id="alamat_kantor" placeholder="Masukkan Alamat Kantor Anda" name="alamat_kantor">
                                </div>
                                <div class="text-center mt-3">
                                    <!-- <a href="index.html" class="btn btn-lg btn-primary">Masuk</a> -->
                                    <button type="button" class="btn btn-lg btn-primary" onclick="prosesdaftarasesi();">Daftar</button>
                                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- </div>
            </div>
            </div> -->
            </div>
            <!-- </main> -->
    </main>

    <!-- <script src="js/app.js"></script> -->

</body>