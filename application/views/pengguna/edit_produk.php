<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header"> <a href="<?php echo site_url('dashboard/lihat_produk/') ?>"> <i class="fas fa-arrow-left"></i> Back</a></div>
                
                <div class="card-body">
                <?php foreach ($produk as $u) { ?>
                    <form action="<?php echo site_url('dashboard/update') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                            <div class="form-label-group">
                                <input type="hidden" id="" name="id" value="<?php echo $u->id_produk ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Nama Produk"> Nama Produk</label>
                                <input type="text" id="Nama Produk" name="nm_produk" value="<?php echo $u->nama_produk ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="Nama Produk"> Deskripsi</label>
                                <input type="text" id="Deskripsi" name="deskripsi" value="<?php echo $u->deskripsi ?>" class="form-control" required>
                            </div>
                        </div>
                        <!-- RIFKY YUSUF MAHFUZ -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="harga">Harga</label>
                                <input type="text" id="Harga" name="harga" value="<?php echo $u->harga ?>" class="form-control" required>
                            </div>
                        </div>

                        <div>
                        <img src='<?= base_url()?>assets/foto_kue/<?=$u->gambar;?>' height="100" width="100"> </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <label for="foto">Upload Foto Baru</label><br>
                                        <input name="foto" type="file" placeholder="Foto" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                    </div>
                                </div>
                            </div><br>
                            <input class="btn btn-primary btn-block" type="submit" value="Edit"><input class="btn btn-danger btn-block" type="reset" value="Batal">
                    </form>
                    <?php } ?>
                    <div class="text-center"> <a class="d-block small" href="<?php echo site_url('dashboard/lihat_produk')?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>