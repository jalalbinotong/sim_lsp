        <div class="col py-3">

            <div class="container">
                <p class="title">
                    Dashboard <?php echo $this->session->userdata('tipe_user');?>
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card text-bg-warning">
                                <img src="https://cdn-icons-png.flaticon.com/512/4168/4168988.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Data Pegawai</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Kelola</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card text-bg-success">
                                <img src="https://cdn-icons-png.flaticon.com/512/1415/1415345.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Data Schema</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Kelola</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card text-bg-primary">
                                <img src="https://cdn-icons-png.flaticon.com/512/2098/2098402.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Data Kegiatan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Kelola</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-info {
        margin-top: 15px;
        margin-bottom: 25px;
    }

    .profile-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .profile-name {
        margin-left: 15px;
        font-size: 1.2rem;
        font-weight: bold;
    }


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