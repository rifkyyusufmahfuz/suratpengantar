<!--Menggunakan Modal Bootstrap-->

<div class="modal modal-danger fade" id="modal-search">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cari Surat Pengantar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form id="form_search" action="<?php echo site_url('dashboard/cari'); ?>" method="GET">

                    <div class="form-group">
                        <div class="input-group input-group-xs">
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK Anda..." required autofocus>

                            <span class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-primary btn-flat">Cari Surat</button>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger pull-left">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Cetak -->

<div class="modal modal-danger fade" id="modal-cetak">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cari Surat Pengantar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form id="form_cetak" action="<?php echo site_url('dashboard/caricetak'); ?>" method="GET">
                    <!-- COPYRIGHT 2022 -->
                    <div class="form-group">
                        <div class="input-group input-group-xs">
                            <input type="text" class="form-control" name="no_pengajuan" value="SP-2021-" placeholder="Masukkan Nomor Surat Pengantar..." required autofocus>

                            <span class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-primary btn-flat">Cari Surat</button>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger pull-left">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>