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
    function handleKeyPress(event) {
        if (event.keyCode === 13 || event.which === 13) {
            event.preventDefault();
            proseslogin();
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');

        emailInput.addEventListener('keypress', handleKeyPress);
        passwordInput.addEventListener('keypress', handleKeyPress);
    });
</script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/style_sidebar.css'); ?>">

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
                                            <button type="button" class="btn btn-lg btn-primary" onclick="proseslogin();">Login</button>
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
</body>

</html>