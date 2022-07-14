<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center text-monospace-bold my-4">
                                        <p class="text-primary"><i class="fas fa-key"> </i> LOGIN</p>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-signin" action="<?php echo site_url('dashboard/autentikasi') ?>" method="post">
                                        <div class="form-group">

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    <input class="form-control py-4" id="id_admin" name="id_admin" type="text" placeholder="ID Admin" required autofocus />
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                        <input class="form-control py-4" id="kata_sandi" name="kata_sandi" type="password" placeholder="Kata Sandi" required />
                                                    </div>
                                                </div>

                                                <div class="form-group" align="center">
                                                    <button class="btn btn-primary" type="submit">Login</button>
                                                    <button class="btn btn-danger"><a href="<?php echo site_url('dashboard/index') ?>"><i></i> Kembali<a class="text-primary"></a></a></button>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>