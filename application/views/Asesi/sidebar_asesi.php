<link rel="stylesheet" href="<?php echo base_url('assets/css/style_sidebar.css'); ?>">
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <div class="profile-info d-flex align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img me-2 img-fluid">
            <h4 class="profile-name mb-0">
                <?php echo $this->session->userdata('nama_lengkap'); ?>
            </h4>
        </div>

        <?php

        $pesan_sidebar = $this->session->flashdata('pesan_sidebar');
        if ($pesan_sidebar == "") {
            echo "";
        } else {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $pesan_sidebar; ?></strong>
            </div>

        <?php
        }
        ?>

        <?php
        $pesan_danger_sidebar = $this->session->flashdata('pesan_danger_sidebar');
        if ($pesan_danger_sidebar == "") {
            echo "";
        } else {
        ?>
            <div class="alert alert-danger">
                <strong><?php echo $pesan_danger_sidebar; ?></strong>
            </div>

        <?php
        }
        ?>

        <?php
        $pesan_warn_sidebar = $this->session->flashdata('pesan_warn_sidebar');
        if ($pesan_warn_sidebar == "") {
            echo "";
        } else {
        ?>
            <div class="alert alert-warning">
                <strong><?php echo $pesan_warn_sidebar; ?></strong>
            </div>

        <?php
        }
        ?>

        <li class="nav-heading">Menu</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_asesi/dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_asesi/FRAPL'); ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span>Lengkapi Data Pendaftaran</span>
            </a>
        </li><!-- End Dashboard Nav -->

        
        <li class="nav-item">
    <?php if ($status === 'setuju'): ?>
        <a class="nav-link collapsed" href="<?php echo base_url('Ccetakpdf/pdf'); ?>" id="cetak-link" data-status="setuju">
            <i class="bi bi-file-earmark-text"></i>
            <span>Cetak Data FR.APL 01</span>
        </a>
    <?php elseif ($status === 'menunggu'): ?>
        <a class="nav-link collapsed" href="#" id="cetak-link" onclick="return false;" data-status="menunggu">
            <i class="bi bi-file-earmark-text"></i>
            <span>Cetak Data FR.APL 01</span>
        </a>
    <?php else: ?>
        <a class="nav-link collapsed" href="#" id="cetak-link" onclick="return false;" data-status="tolak">
            <i class="bi bi-file-earmark-text"></i>
            <span>Cetak Data FR.APL 01</span>
        </a>
    <?php endif; ?>
</li><!-- End Dashboard Nav -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cetakLink = document.getElementById('cetak-link');
        if (cetakLink.getAttribute('href') === '#') {
            cetakLink.addEventListener('click', function(event) {
                event.preventDefault();
                var status = this.getAttribute('data-status');
                if (status === 'menunggu') {
                    alert('Tombol tidak dapat diklik karena status menunggu.');
                } else if (status === 'tolak') {
                    alert('Tombol tidak dapat diklik karena status ditolak.');
                } else {
                    alert('Tombol tidak dapat diklik karena status tidak aktif.');
                }
            });
        }
    });
</script>



</aside><!-- End Sidebar-->
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

    .profile-img {
        width: 50px;
    }
</style>