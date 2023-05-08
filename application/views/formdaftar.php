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
        $('#formdaftar').submit();
    }
</script>

<div class="container">
    <form id="formdaftar" name="formdaftar" method="post" action="<?php echo base_url('cdaftar/prosesdaftar'); ?>">
        <div class="mb-3 mt-3">
            <div class="mb-3">
                <input type="hidden" name="id_user" id="id_user" />
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
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" onclick="prosesdaftar();">Submit</button>
    </form>

</div>