<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card-header">
                <h3 class="box-title" align="center"><b>Status Pengajuan Surat Pengantar</b></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="example2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width='15%'>No. Surat Pengantar</th>
                                <th>NIK KTP</th>
                                <th width='30%'>Tanggal Pengajuan</th>
                                <th width='25%'>Jenis Pengajuan</th>
                                <th>Status RT</th>
                                <th>Status RW</th>
                                <th>Status Pengajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?php echo $row->no_pengajuan; ?> </td>
                                    <td><?php echo $row->nik; ?></td>
                                    <td><?php echo $row->tanggal_pengajuan ?></td>
                                    <td><?php echo $row->jns_pengajuan ?></td>
                                    <td>
                                        <center>
                                            <?php if ($row->validasi_rt == 1) {
                                                echo "<span class='label label-danger'>Belum Divalidasi</span>";
                                                $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                $icon = "switch";
                                                $class = "danger";
                                            } else {
                                                echo "<span class='label label-info'>Sudah Divalidasi</span>";
                                                $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                $icon = "switch";
                                                $class = "info";
                                            } ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <?php if ($row->validasi_rw == 1) {
                                                echo "<span class='label label-danger'>Belum Divalidasi</span>";
                                                $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                $icon = "switch";
                                                $class = "danger";
                                            } else {
                                                echo "<span class='label label-info'>Sudah Divalidasi</span>";
                                                $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                $icon = "switch";
                                                $class = "info";
                                            }  ?></center>
                                    </td>
                                    <td>
                                        <center> <?php if ($row->validasi_rw == 1) {
                                                        echo "<span class='label label-danger'>Menunggu Validasi</span>";
                                                        $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                        $icon = "switch";
                                                        $class = "danger";
                                                    } else {
                                                        echo "<span class='label label-success'>Selesai</span>";
                                                        $site = site_url('dashboard/cari' . $row->no_pengajuan);
                                                        $icon = "switch";
                                                        $class = "success";
                                                    }  ?></center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>