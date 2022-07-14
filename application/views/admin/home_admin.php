<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4" align="center">Selamat Datang di Sistem Informasi Pengajuan Surat Pengantar RT/RW</h3>
            <br>
            <div class="row">

                <div class="col-xl-12 col-md-6"><br>
                    <div>
                        <div class="card-header bg-primary text-light border border-primary">
                            <h1>
                                <center>Informasi Validasi</center>
                            </h1>
                        </div>
                        
                        <div class="card-body bg-light border border-primary">
                            <center>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card-header bg-warning">
                                        <h4>Perlu Divalidasi : </h2>
                                            <h1><b><?php echo $total1; ?></h1></b>
                                    </div>
                                </div>
                                <br>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card-header bg-success">
                                        <h4>Sudah Divalidasi : </h2>
                                            <h1><b><?php echo $total2; ?></b></h1>
                                    </div>
                                </div>
                            </center>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between bg-primary text-light">
                            <b><?php echo format_indo(date('Y-m-d')); ?></b>
                            <h6 align="center">Ini adalah halaman validasi untuk <?php echo $this->session->userdata('name'); ?></h6>
                        </div>
                    </div>
                </div>
    </main>