<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card-header">
                <h3>
                    <center><b>Form Pengajuan Surat Pengantar</b></center>
                </h3>
            </div>

            <div class="card card-register mx-auto mt-1"></div>
            <a href="<?php echo site_url('dashboard/index') ?>"><i class="fa fa-arrow-left text-primary"></i> Kembali<a class="text-primary"> </a></a>
            <div class="card-body"><br>

                <form action="<?php echo site_url('dashboard/simpan_pengajuan') ?>" method="POST" enctype="multipart/form-data">

                    <table class="table">
                        <tr>
                            <td><label for="Nomor Surat Pengantar" label class="control-label col-xs-8"> Nomor Surat Pengantar</label></td>
                            <td colspan="2"><input type="text" name="no_pengajuan" value="<?= $nm_otomatis; ?>" class="form-control" readonly=""></td>
                        </tr>
                        
                        <tr>
                            <td><label for="NIK KTP" label class="control-label col-xs-6">NIK KTP</label></td>
                            <td> <input type="text" id="nik" name="nik" class="form-control" placeholder="Silahkan Masukan NIK Anda.." onkeypress="return event.charCode >= 48 && event.charCode <=57" maxlength="16" minlength="16" required></td>
                        </tr>

                        <tr>
                            <td><label for="nama" label class="control-label col-xs-6"> Nama Lengkap</label></td>
                            <td> <input type="text" id="nama_penduduk" name="nama_penduduk" placeholder="Nama Lengkap (Terisi Otomatis)" class="form-control" readonly required></td>
                        </tr>

                        <tr>
                            <td><label class="control-label col-xs-6">Jenis Pengajuan</label></td>
                            <td> <select name="jns_pengajuan" class="form-select" required>
                                    <option value="">Pilih Jenis Pengajuan</option>
                                    <option value=" Izin Usaha">Izin Usaha</option>
                                    <option value="Izin Menikah">Izin Menikah</option>
                                    <option value="Izin Keramaian">Izin Keramaian</option>
                                    <option value="Pembuatan Kartu Keluarga">Pembuatan Kartu Keluarga</option>
                                    <option value="Pembuatan Kartu Tanda Penduduk">Pembuatan Kartu Tanda Penduduk</option>
                                    <option value="Pindah Alamat">Pindah Alamat</option>
                                    <option value="Surat Kematian">Surat Kematian</option>
                                    <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right">
                                <input class="btn btn-primary" type="submit" value="Ajukan">
                                <input class="btn btn-danger" type="reset" value="Batal">
                            </td>
                        </tr>
                    </table>
                    <div class="form-group">
                </form>
            </div>
        </div>
</div>
</main>