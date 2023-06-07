<script language="javascript">
    function prosesdaftar() {

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


        var password = $('#password').val();
        if (password == "") {

            alert("Password masih kosong");
            $('#password').focus();
            return false;
        }
        $('#formdaftar').submit();
    }
</script>


<body>

    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Tambah Akun Pegawai</h1>
                            <p class="lead">
                                Membambahkan akun yang dapat digunakan pegawai LSP
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
                                    <form id="formdaftar" name="formdaftar" method="post" action="<?php echo base_url('cdaftar/prosesdaftarlsp'); ?>">
                                        <div class="mb-3">
                                            <input type="hidden" name="id_user" id="id_user" />
                                            <input type="hidden" name="tipe_user" id="tipe_user" value="lsp" />
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
                                            <label class="form-label">Password:</label>
                                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-lg btn-primary" onclick="prosesdaftar();">Daftar</button>
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