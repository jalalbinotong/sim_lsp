<script language="javascript">
    function proseseditdata() {

        var NIP = $('#NIP').val();
        if (NIP == "") {

            alert("NIP masih kosong");
            $('#NIP').focus();
            return false;
        }

        var nama = $('#nama').val();
        if (nama == "") {

            alert("Nama masih kosong");
            $('#nama').focus();
            return false;
        }

        var kelamin = $('#kelamin').val();
        if (kelamin == "") {

            alert("Jenis kelamin masih kosong");
            $('#kelamin').focus();
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

        var nomor_hp = $('#nomor_hp').val();
        if (nomor_hp == "") {

            alert("no telepon masih kosong");
            $('#nomor_hp').focus();
            return false;
        }

        var alamat = $('#alamat').val();
        if (alamat == "") {

            alert("alamat masih kosong");
            $('#alamat').focus();
            return false;
        }

        var email = $('#email').val();
        if (email == "") {

            alert("email masih kosong");
            $('#email').focus();
            return false;
        }

        var jabatan = $('#jabatan').val();
        if (jabatan == "") {

            alert("jabatan masih kosong");
            $('#jabatan').focus();
            return false;
        }

        var golongan = $('#golongan').val();
        if (golongan == "") {

            alert("golongan masih kosong");
            $('#golongan').focus();
            return false;
        }
        $('#formdata_pegawai').submit();
    }
</script>
<!-- <main id="main" class="main">

    <div class="container">
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

        $pesan_danger = $this->session->flashdata('pesan_danger');
        if ($pesan_danger == "") {
            echo "";
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>
                    <?php echo $pesan_danger; ?>
                </strong>
            </div>

        <?php
        }
        ?>
        <form id="formdata_pegawai" name="formdata_pegawai" method="post" action="<?php echo base_url('cdashboard/proseseditdata'); ?>">

            <div class="mb-3">
                <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">NIP </label>
                <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP" name="NIP" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama </label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>


            <div class="mb-3">

                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="L" ?>
                        <label class="form-check-label" for="gridRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="P" ?>
                        <label class="form-check-label" for="gridRadios3">
                            Perempuan
                        </label>
                    </div>
                </div>


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
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="number" class="form-control" id="nomor_hp" placeholder="Masukkan No telepon" name="nomor_hp">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Golongan</label>
                <input type="teks" class="form-control" id="golongan" placeholder="Masukkan Golongan" name="golongan">
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="teks" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan">
            </div>
            <br>

            <button type="button" class="btn btn-primary" onClick="proseseditdata()">Edit</button>
        </form>
    </div>
 -->

<main id="main" class="main">

    <div class="container">
        <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
            <div class="pagetitle">
                <h1>Edit Data Pegawai</h1>
            </div>
            <div class="card">
                <div class="card-body mt-4">
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

                    $pesan_danger = $this->session->flashdata('pesan_danger');
                    if ($pesan_danger == "") {
                        echo "";
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>
                                <?php echo $pesan_danger; ?>
                            </strong>
                        </div>

                    <?php
                    }
                    ?>

                    <!-- General Form Elements -->
                    <form id="formdata_pegawai" name="formdata_pegawai" method="post" action="<?php echo base_url('cdashboard/proseseditdata'); ?>">

                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $hasil->id_user; ?>">
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">NIP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="NIP" name="NIP" value="<?php echo $hasil->NIP; ?>">
                            </div>
                        </div>


                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil->nama; ?>">
                            </div>
                        </div>


                        <fieldset class="row mb-3 offset-sm-1">
                            <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="L" <?php if ($hasil->kelamin == 'L') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="P" <?php if ($hasil->kelamin == 'P') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios3">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $hasil->tempat_lahir; ?>">
                            </div>
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo date('Y-m-d', strtotime($hasil->tgl_lahir)); ?>">
                            </div>
                        </div>


                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Nomor HP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?php echo $hasil->nomor_hp; ?>">
                            </div>
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="4" id="alamat" name="alamat" value="<?php echo $hasil->alamat; ?>"><?php echo $hasil->alamat; ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $hasil->email; ?>">
                            </div>
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Jabatan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $hasil->jabatan; ?>">
                            </div>
                        </div>

                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label">Golongan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="golongan" name="golongan" value="<?php echo $hasil->golongan; ?>">
                            </div>
                        </div>
                        <div class="row mb-3 offset-sm-1">
                            <label class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">

                                <button type="button" class="btn btn-primary" onClick="proseseditdata()">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
</main>