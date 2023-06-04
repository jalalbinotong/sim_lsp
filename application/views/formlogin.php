<script language="javascript">
    function proseslogin() {

        var email = $('#email').val();
        if (email == "") {

            alert("email masih kosong");
            $('#email').focus();
            return false;
        }

        var password = $('#password').val();
        if (password == "") {

            alert("password masih kosong");
            $('#password').focus();
            return false;
        }
        $('#formlogin').submit();
    }
</script>

<div class="container">


    <!-- <div class="container">
        <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url('clogin/proseslogin'); ?>">
            <div class="mb-3 mt-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" onclick="proseslogin();">Login</button>
            <button type="submit" class="btn btn-danger">Batal</button>
        </form>

    </div> -->

    <body>
        <main class="d-flex w-100">
            <div class="container d-flex flex-column">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class="h2">Login</h1>
                                <p class="lead">
                                    Silahkan login menggunakan akun anda
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
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                <strong><?php echo $pesan; ?></strong>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url('clogin/proseslogin'); ?>">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Masukkan email anda" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Masukkan password anda" />
                                                <!-- <small>
                                                    <a href="index.html">Forgot password?</a>
                                                </small> -->
                                            </div>
                                            <div>
                                                <!-- <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                                    <span class="form-check-label">
                                                        Remember me next time
                                                    </span>
                                                </label> -->
                                            </div>
                                            <div class="text-center mt-3">
                                                <!-- <a href="index.html" class="btn btn-lg btn-primary">Masuk</a> -->
                                                <button type="button" class="btn btn-lg btn-primary" onclick="proseslogin();">Login</button>
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

    </html>