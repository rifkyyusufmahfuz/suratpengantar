<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="box-title" align="center"><b>Cetak Surat Pengantar</b></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="example2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width='25%'>No. Surat Pengantar</th>
                                <th>NIK KTP</th>
                                <th width='25%'>Tanggal Pengajuan</th>
                                <th width='20%'>Jenis Pengajuan</th>
                                <th width='20%'>Status Pengajuan</th>
                                <th width='20%'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cetak as $row) : ?>
                                <tr>
                                    <td><?php echo $row->no_pengajuan; ?> </td>
                                    <td><?php echo $row->nik; ?></td>
                                    <td><?php echo $row->tanggal_pengajuan ?></td>
                                    <td><?php echo $row->jns_pengajuan ?></td>
                                    <td>
                                        <center>
                                            <?php if ($row->validasi_rw == 1) {
                                                echo "<span class='label label-danger'>Belum Divalidasi</span>";
                                                $site = site_url('dashboard/caricetak' . $row->no_pengajuan);
                                                //$teks="Nonaktifkan Data";
                                                $icon = "switch";
                                                $class = "danger";
                                            } else {
                                                echo "<span class='label label-success'>Selesai</span>";
                                                $site = site_url('dashboard/caricetak' . $row->no_pengajuan);
                                                //$teks="Aktifkan Data";
                                                $icon = "switch";
                                                $class = "success";
                                            }  ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <?php if ($row->validasi_rw == 1) {
                                                echo "<span class='label label-danger'>Menunggu Validasi</span>";
                                                $site = site_url('dashboard/caricetak' . $row->no_pengajuan);
                                                //$teks="Nonaktifkan Data";
                                                $icon = "switch";
                                                $class = "danger";
                                            } else { ?>
                                                <a target="_blank" href="<?php echo base_url('/cetak/index/' . $row->no_pengajuan); ?>" class="btn btn-primary">
                                                    <i class="fas fa-print"></i></a>
                                            <?php }  ?>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>