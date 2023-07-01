<script language="javascript">
    function prosesdaftar() {


        var nim = $('#nim').val();
        if (nim == "") {

            alert("Nim masih kosong");
            $('#nim').focus();
            return false;
        }

        var nama_lengkap = $('#nama_lengkap').val();
        if (nama_lengkap == "") {

            alert("Nama Lengkap masih kosong");
            $('#nama_lengkap').focus();
            return false;
        }

        var email = $('#email').val();
        if (email == "") {

            alert("Email masih kosong");
            $('#email').focus();
            return false;
        }

        var prodi = $('#prodi').val();
        if (prodi == "none" || prodi == "") {

            alert("Prodi masih kosong");
            $('#prodi').focus();
            return false;
        }

        var password = $('#password').val();
        if (password == "") {

            alert("Password masih kosong");
            $('#password').focus();
            return false;
        }
        $('#formdaftar').submit();
    }
</script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/style_sidebar.css'); ?>">

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column mt-5">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-5">
                            <h1 class="h2">Daftar akun</h1>
                            <p class="lead">
                                Silahkan daftar untuk membuat akun anda
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
                                            <strong>
                                                <?php echo $pesan; ?>
                                            </strong>
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
                                    <form id="formdaftar" name="formdaftar" method="post" action="<?php echo base_url('cdaftar/prosesdaftar'); ?>">
                                        <div class="mb-3">
                                            <input type="hidden" name="id_user" id="id_user" />
                                            <input type="hidden" name="tipe_user" id="tipe_user" value="asesi" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">NIM :</label>
                                            <input type="number" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Lengkap :</label>
                                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan nama lengkap" name="nama_lengkap">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email :</label>
                                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Prodi :</label>
                                            <select id="id_prodi" name="id_prodi" class="form-select" aria-label="Default select example">
                                                <option value="none" selected>Pilih Prodi</option>
                                                <?php
                                                if (empty($hasil)) {
                                                ?>
                                                    <option value="">Tidak ada data</option>
                                                    <?php
                                                } else {
                                                    foreach ($hasil as $data) :
                                                    ?>
                                                        <option value="<?php echo $data->id_jurusan; ?>"><?php echo $data->nama_jurusan; ?></option>
                                                <?php
                                                    endforeach;
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                        </div>

                                        <div class="text-center mt-3">
                                            <!-- <a href="index.html" class="btn btn-lg btn-primary">Masuk</a> -->
                                            <button type="button" class="btn btn-lg btn-primary" onclick="prosesdaftar();">Daftar</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- <script src="js/app.js"></script> -->

</body>