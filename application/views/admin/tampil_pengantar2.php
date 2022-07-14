<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card-header">
                <h4>
                    <center><b>List Pengajuan Surat Pengantar</b></center>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="example2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor Surat Pengantar</th>
                                <th>NIK KTP</th>
                                <th>Nama Penduduk</th>
                                <th>Tanggal Pengantar</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =  0;
                            foreach ($pengajuan_surat as $ps) : $no++; ?>
                                <tr>
                                    <td><?php echo $ps->no_pengajuan; ?></td>
                                    <td><?php echo $ps->nik; ?></td>
                                    <td><?php echo $ps->nama_penduduk; ?></td>
                                    <td><?php echo $ps->tanggal_pengajuan; ?></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#modal-show<?= $ps->nik; ?>" class="btn-sm btn-primary" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fa fa-eye"></i></a>
                                        
                                        <!-- COPYRIGHT 2022 -->
                                        <a data-toggle="modal" data-target="#modal-validasi<?= $ps->no_pengajuan; ?>" class="btn-sm btn-warning" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fa fa-check"></i></a>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>