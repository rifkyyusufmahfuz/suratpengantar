<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar navbar-dark bg-primary">
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a class="navbar-brand" href="">Sistem Informasi Pengajuan Surat Pengantar RT/RW</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $this->session->userdata('name'); ?> </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <h5 class="dropdown-header">Login Sebagai : </h5>
                    <h5 class="dropdown-header"><b><?php echo $this->session->userdata('name'); ?></b></h5>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('dashboard/logout') ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>