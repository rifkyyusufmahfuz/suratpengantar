<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!-- <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> -->
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="<?php echo site_url('akses_admin/index') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-signature"></i></div>
                        Pengajuan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <!-- COPYRIGHT 2022 KELOMPOK ALVIA GIDEON INTA RIFKY WAHID -->
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('akses_admin/tampilvalidasi') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>Validasi Surat Pengantar
                            </a>
                        </nav>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('akses_admin/riwayatvalidasi') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>Riwayat Validasi
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Login Sebagai :</div>
                <?php echo $this->session->userdata('name'); ?>
            </div>
        </nav>
    </div>