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
                            <img src="https://cdn-icons-png.flaticon.com/512/2098/2098402.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pilih Skema & Data FR APL.01</h5>
                            <p class="card-text">Pilih Skema & Melengkapi Data FR APL.01</p>
                            <a href="<?php echo base_url("Cdashboard_asesi/listskema") ?>" class="btn btn-primary">Pilih Skema & Lengkapi Berkas</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-success">
                            <img src="https://cdn-icons-png.flaticon.com/512/1415/1415345.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pilih Skema</h5>
                            <p class="card-text">Pilih Skema Yang Anda Ikuti Disini</p>
                            <a href="<?php echo base_url("Cdashboard_asesi/listskema") ?>" class="btn btn-primary">Lihat Skema Yang Tersedia</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card text-bg-warning">
                            <img src="https://cdn-icons-png.flaticon.com/512/3652/3652267.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pilih Jadwal</h5>
                            <p class="card-text">Pilih Jadwal Ujian Anda Disini</p>
                            <a href="<?php echo base_url("Cdashboard_asesi/listjadwal") ?>" class="btn btn-primary">Lihat Jadwal Yang Tersedia</a>
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