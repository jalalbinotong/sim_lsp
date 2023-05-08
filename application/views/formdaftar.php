<script language="javascript">
    function simpandata() {

        var Nim = $('Nim').val();
        if (nim == "") {

            alert("Nim masih kosong");
            $('#Nim').focus();
            return false;
        }

        var nama_lengkap = $('#nama_lengkap').val();
        if (nama_lengkap == "") {

            alert("Nama Lengkap masih kosong");
            $('#nama_lengkap').focus();
            return false;
        }

        var nama_lengkap = $('#email').val();
        if (email == "") {

            alert("Email masih kosong");
            $('#email').focus();
            return false;
        }

        var nama_lengkap = $('#password').val();
        if (password == "") {

            alert("Password masih kosong");
            $('#password').focus();
            return false;
        }
        $('#formdaftar').submit();
    }
</script>

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
    <form id="formdaftar" name="formdaftar" method="post" action="<?php echo base_url('cdaftar/prosesdaftar'); ?>">
        <div class="mb-3 mt-3">
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
                <input type="nim" class="form-control" id="nim" placeholder="Masukkan Email" name="nim">
            </div>
            <div class="mb-3">
                <label class="form-label">nama_lengkap:</label>
                <input type="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Masukkan nama_lengkap" name="nama_lengkap">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" onclick="simpandata();">Submit</button>
    </form>

</div>