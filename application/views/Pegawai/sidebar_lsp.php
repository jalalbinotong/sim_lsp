<link rel="stylesheet" href="<?php echo base_url('assets/css/style_sidebar.css'); ?>">
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <div class="profile-info d-flex align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img me-2 img-fluid">
            <h4 class="profile-name mb-0">
                <?php echo $this->session->userdata('nama_lengkap'); ?>
            </h4>
        </div>

        <li class="nav-heading">Menu</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_lsp/dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_lsp/data_skema'); ?>">
                <i class="bi bi-diagram-2"></i>
                <span>Data Skema</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_lsp/data_kompetensi'); ?>">
                <i class="bi bi-journal-medical"></i>
                <span>Data Kompetensi</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('Cdashboard_lsp/data_kegiatan'); ?>">
                <i class="bi bi-calendar-event"></i>
                <span>Data Kegiatan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('cdashboard_lsp/listdataasesi'); ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span>Data Pendaftaran Asesi</span>
            </a>
        </li> -->
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i>
                </i><span>Data Pendaftaran Asesi</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url('cdashboard_lsp/listdataasesi_disetujui'); ?>">
                        <i class="bi bi-circle"></i><span>Data Disetujui</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('cdashboard_lsp/listdataasesi_ditolak'); ?>">
                        <i class="bi bi-circle"></i><span>Data Ditolak</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('cdashboard_lsp/listdataasesi_menunggu'); ?>">
                        <i class="bi bi-circle"></i><span>Data Belum Diverifikasi</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->




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