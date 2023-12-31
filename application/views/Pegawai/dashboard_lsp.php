<main id="main" class="main">
    <div class="col">
        <div class="container fluid">
            <p class="title">
                Dashboard
                <?php echo $this->session->userdata('tipe_user'); ?>
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-success">
                            <img src="https://cdn-icons-png.flaticon.com/512/1415/1415345.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Skema Sertifikasi</h5>
                            <p class="card-text">Mengatur Data Skema</p>
                            <a href="<?php echo base_url("Cdashboard_lsp/data_skema") ?>" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-danger">
                            <img src="   https://cdn-icons-png.flaticon.com/512/10782/10782060.png " class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Kompetensi</h5>
                            <p class="card-text">Mengatur Kompetensi Dalam Skema</p>
                            <a href="<?php echo base_url("cdashboard_lsp/data_kompetensi") ?>" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-warning">
                            <img src="https://cdn-icons-png.flaticon.com/512/3652/3652267.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Kegiatan</h5>
                            <p class="card-text">Mengatur Data Kegiatan</p>
                            <a href="<?php echo base_url("Cdashboard_lsp/data_kegiatan") ?>" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-primary">
                            <img src="https://cdn-icons-png.flaticon.com/512/2098/2098402.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Pendaftaran Asesi</h5>
                            <p class="card-text">Verifikasi Data Pendaftaran Asesi</p>
                            <a href="<?php echo base_url("cdashboard_lsp/listdataasesi_menunggu") ?>" class="btn btn-primary">Kelola</a>
                        </div>
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

    .card-header-color {
        background-color: yellow;
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