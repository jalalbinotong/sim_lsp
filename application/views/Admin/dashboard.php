<main id="main" class="main">
    <!-- <div class="col"> -->
    <div class="container fluid">
        <p class="title">
            Dashboard
            <?php echo $this->session->userdata('tipe_user'); ?>
        </p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card text-bg-success">
                        <img src="https://cdn-icons-png.flaticon.com/512/1415/1415345.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Data Skema</h5>
                        <p class="card-text">Mengatur Data Data Skema Yang Ada</p>
                        <a href="<?php echo base_url("Cdashboard_lsp/data_skema") ?>" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card text-bg-primary">
                        <img src="https://cdn-icons-png.flaticon.com/512/3652/3652267.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Data Kegiatan</h5>
                        <p class="card-text">Mengatur Data-Data Kegiatan Yang Ada</p>
                        <a href="<?php echo base_url("Cdashboard_lsp/data_kegiatan") ?>" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card text-bg-danger">
                        <img src="https://cdn-icons-png.flaticon.com/512/863/863823.png " class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Buat Akun Pegawai</h5>
                        <p class="card-text">Menambahkan akun pegawai</p>
                        <a href="<?php echo base_url("Cdashboard/tambah_akun_pegawai") ?>" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card text-bg-warning">
                        <img src="https://cdn-icons-png.flaticon.com/512/4168/4168988.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Akun Pegawai</h5>
                        <p class="card-text">Mengatur Akun-Akun Pegawai LSP</p>
                        <a href="<?php echo base_url("Cdashboard/tabelakun_pegawai") ?>" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card text-bg-info">
                        <img src="https://cdn-icons-png.flaticon.com/512/10306/10306783.png " class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Data Pegawai</h5>
                        <p class="card-text">Mengatur Data Pegawai LSP</p>
                        <a href="<?php echo base_url("Cdashboard/list_data_pegawai") ?>" class="btn btn-primary">Kelola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    /* .card {
        background-color: aqua;
    } */

    .card img {
        height: 100px;
        width: 100px;
    }

    .card-img-top {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 15px;
        margin-bottom: 15px;
        text-align: center;
    }

    .title {
        font-size: 50px;
        font-weight: 500;
    }
</style>