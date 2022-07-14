  <!-- Modal Validasi -->
  <?php $no =  0;
    foreach ($pengajuan_surat as $ps) : $no++; ?>
      <div id="modal-validasi<?= $ps->no_pengajuan; ?>" class="modal fade">
          <div class="modal-dialog">

              <form action="<?php echo site_url('akses_admin/validasi'); ?>" method="post">
                  <div class="modal-content">
                      <div class="modal-header bg-primary">
                          <h4 class="modal-title">Form Validasi</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="box-body">
                          <div class="modal-body">
                              <table class="table">
                                  <tr>
                                      <td><label for="no_pengajuan">Nomor Surat Pengantar</label></td>
                                      <td><input type="text" readonly value="<?= $ps->no_pengajuan; ?>" name="no_pengajuan" class="form-control" required=""></td>
                                  </tr>
                                  <tr>
                                      <td><label for="Tanggal">Tanggal Pengajuan</label></td>
                                      <td> <input type="text" readonly value="<?= $ps->tanggal_pengajuan; ?>" name="tanggal" class="form-control" required=""></td>
                                  </tr>
                                  <tr>
                                      <td><label for="NIK KTP">NIK KTP</label></td>
                                      <td> <input type="text" readonly value="<?= $ps->nik; ?>" name="nik" class="form-control" required=""></td>
                                  </tr>
                                  <tr>
                                      <td><label for="nama"> Nama Lengkap</label></td>
                                      <td><input type="text" readonly value="<?= $ps->nama_penduduk; ?>" name="nama" autocomplete="off" class="form-control" required="">
                                  </tr>
                                  <tr>
                                      <td><label class="control-label col-xs-3">Jenis Pengajuan</label></td>
                                      <td><textarea readonly class="form-control" id="fix">  <?= $ps->jns_pengajuan;; ?></textarea></td>
                                  </tr>
                              </table>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Kembali</button>
                                  <button type="submit" onclick="return confirm('Validasi Surat Pengantar..?')" class="btn btn-primary"><i class="fas fa-check"></i> Validasi</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      <!--box-body -->




  <?php endforeach; ?>

  <!-- Modal Detail -->
  <?php $no = 0;
    foreach ($detail as $pend) : $no++; ?>
      <div id="modal-show<?= $pend->nik; ?>" class="modal fade">
          <div class="modal-dialog">
              <form>
                  <div class="modal-content">
                      <div class="modal-header bg-primary">
                          <h4 class="modal-title">Detail Penduduk</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">

                          <table class="table">
                              <tr>
                                  <td><label for="nik">NIK KTP</label></td>
                                  <td><input type="text" readonly value="<?= $pend->nik; ?>" name="nik" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="nama_penduduk">Nama Lengkap</label></td>
                                  <td><input type="text" readonly value="<?= $pend->nama_penduduk; ?>" name="nama_penduduk" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="tempat_lhr">Tempat Lahir</label></td>
                                  <td><input type="text" readonly value="<?= $pend->tempat_lhr; ?>" name="tempat_lhr" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="tgl_lhr">Tanggal Lahir</label></td>
                                  <td><input type="text" readonly value="<?= $pend->tgl_lhr; ?>" name="tgl_lhr" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="alamat">Alamat</label></td>
                                  <td><textarea readonly class="form-control" id="fix"><?= $pend->alamat; ?>" </textarea></td>
                              </tr>
                              <tr>
                                  <td><label for="rt">RT / RW</label></td>
                                  <td><input type="text" readonly value="<?= $pend->rt; ?> / <?= $pend->rw ?>" name="rt" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="agama">Agama</label></td>
                                  <td><input type="text" readonly value="<?= $pend->agama; ?>" name="agama" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="jns_kelamin">Jenis Kelamin</label></td>
                                  <td><input type="text" readonly value="<?= $pend->jns_kelamin; ?>" name="jns_kelamin" class="form-control" required=""></td>
                              </tr>


                              <tr>
                                  <td><label for="sts_perkawinan">Status Perkawinan</label></td>
                                  <td><input type="text" readonly value="<?= $pend->sts_perkawinan; ?>" name="sts_perkawinan" class="form-control" required=""></td>
                              </tr>
                              <tr>
                                  <td><label for="pekerjaan">Pekerjaan</label></td>
                                  <td><input type="text" readonly value="<?= $pend->pekerjaan; ?>" name="pekerjaan" class="form-control" required=""></td>
                              </tr>
                          </table>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Kembali</button>
                          </div>
                      </div>
                      <!-- akhir body-->
              </form>
          </div>
      </div>
      </div>
  <?php endforeach; ?>