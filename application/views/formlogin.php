<script language="javascript">
    function simpandata() {

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

    <div class="container">
        <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url('clogin/proseslogin'); ?>">
            <div class="mb-3 mt-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" id="Email" placeholder="Masukkan email" name="Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" id="Password" placeholder="Masukkan password" name="Password">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" onclick="proseslogin();">Login</button>
            <button type="submit" class="btn btn-danger">Batal</button>
        </form>

    </div>