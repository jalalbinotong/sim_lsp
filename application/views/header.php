<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIM LSP Politeknik Negeri Bali</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">


</head>

<body onload="closepreload();">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">LSP Politeknik Negeri Bali</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url('cmain/tampilberanda') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url('credirect/validasi_dashboard') ?>">Dashboard</a></li>

                    <li class="dropdown"><a href="#"><span>Akun</span> <i class="bi bi-chevron-down"></i></a>
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
    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
    <!-- preload -->
    <script>
        function closepreload() {
            document.getElementById('preload').style.display = 'none';
        }
    </script>

    <!-- Template Main JS File -->
    <!-- <script src="assets/js/main.js"></script> -->

    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>




</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<script language="javascript">
    function logout() {
        if (confirm("Apakah yakin keluar sistem")) {
            //jalankan	
            window.open("<?php echo base_url(); ?>clogin/logout", "_self");
        }
    }
</script>

<!-- AJAX -->
<div id="script"></div>
<script src="<?php echo base_url(); ?>/jquery/app.js"></script>
<script language="javascript">
  var site = "<?php echo base_url()?>index.php/";
  var loading_image_large = "<?php echo base_url()?>gambar/loading_large.gif";
</script> 

</html>