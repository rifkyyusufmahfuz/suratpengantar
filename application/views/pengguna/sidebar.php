<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!-- <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> -->
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="<?php echo site_url('dashboard/index') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
                        Pengajuan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('dashboard/pengajuan') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>Ajukan Surat Pengantar
                            </a>

                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-search">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>Lihat Status Pengajuan
                            </a>

                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-cetak">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>Cetak Surat
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>