<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIM LSP Politeknik Negeri Bali</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>">

    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>">




    <!-- Template Main CSS File -->


    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>

    <!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LSP Politeknik Negeri Bali</a>

            <form class="d-flex" role="search">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('cdashboard/dashboard') ?>">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akun</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('cdaftar/formdaftar') ?>">Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('clogin/formlogin') ?>">Login</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)" onClick="logout();">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('cutama/tampilberanda') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </nav> -->

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">LSP Politeknik Negeri Bali</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url('cmain/tampilberanda') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url('cdashboard/dashboard') ?>">Dashboard</a></li>
                    <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('cdaftar/formdaftar') ?>">Pendaftaran</a></li>
                            <li><a href="<?php echo base_url('clogin/formlogin') ?>">Login</a></li>
                            <li><a href="javascript:void(0)" onClick="logout();">Logout</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <div class="container-fluid">
        <!-- <div class="row"> -->
        <?php
        if (empty($beranda)) {
            echo @$sidebar;
        } else {
            echo '';
        }
        if (empty($konten)) {
            echo '';
            if (empty($beranda)) {
                header("Location: Cmain/tampilberanda");
            } else {
                echo $beranda;
            }
        } else {
            echo $konten;
        }
        ?>
        <!-- <div class="d-flex justify-content-center col mt-4"> -->
        <?php
        if (empty($tabel)) {
            echo '';
        } else {
            echo $tabel;
        }
        ?>
        <!-- </div> -->
        <!-- </div> -->
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<!-- <div id="script"></div>
<script src="<?php echo base_url(); ?>/jquery/app.js"></script>
<script language="javascript">
    var site = "<?php echo base_url() ?>index.php/";
    var loading_image_large = "<?php echo base_url() ?>gambar/loading_large.gif";


    // coba scroll
    // ambil element navbar
    const navbar = document.querySelector('.navbar');

    let prevScrollPos = window.pageYOffset;

    window.addEventListener('scroll', () => {
        // ambil posisi scroll saat ini
        const currentScrollPos = window.pageYOffset;

        // jika posisi scroll saat ini lebih besar dari posisi scroll sebelumnya
        if (prevScrollPos > currentScrollPos) {
            // tampilkan navbar
            navbar.classList.remove('navbar-hide');
        } else {
            // sembunyikan navbar
            navbar.classList.add('navbar-hide');
        }

        // update posisi scroll sebelumnya
        prevScrollPos = currentScrollPos;
    });
</script> -->

<script language="javascript">
    function logout() {
        if (confirm("Apakah yakin keluar sistem")) {
            //jalankan	
            window.open("<?php echo base_url(); ?>clogin/logout", "_self");
        }
    }
</script>

<style>
    .navbar {
        transition: .5s ease;
    }

    .navbar-hide {
        top: -100px;
        transition: .5;
    }
</style>

</html>