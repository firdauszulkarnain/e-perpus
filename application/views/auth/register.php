<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
    <!-- My Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/auth.css">
</head>

<body style="background-image: url(../assets/img/bg/bg1.jpg); background-size: cover;">
    <div class="container mb-5">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-6">
                <!-- <div class="login-box mt-5"> -->
                <div class="card " style="opacity: 0.95 !important;">
                    <div class="p-5">
                        <div class=" card-body p-0">

                            <h1 class="h4 text-info font-weight-bolder mb-4 mt-3 text-center">REGISTER EDELWEIS</h1>
                            <hr class="garis">

                            <form method="POST" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control text-capitalize  <?= (form_error('nama')) ? 'border border-danger' : 'border border-secondary' ?>" id="nama" placeholder="Nama Lengkap" name="nama" autocomplete="off" value="<?= set_value('nama');  ?>">
                                    <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control  <?= (form_error('username')) ? 'border border-danger' : 'border border-secondary' ?>" id="username" placeholder="Username" name="username" autocomplete="off" value="<?= set_value('username');  ?>">
                                    <?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control  <?= (form_error('email')) ? 'border border-danger' : 'border border-secondary' ?>" id="email" placeholder="Email Address" name="email" autocomplete="off" value="<?= set_value('email');  ?>">
                                    <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control  <?= (form_error('notelp')) ? 'border border-danger' : 'border border-secondary' ?>" id="notelp" placeholder="No Telepon" name="notelp" autocomplete="off" value="<?= set_value('notelp');  ?>">
                                    <?= form_error('notelp', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control  <?= (form_error('alamat')) ? 'border border-danger' : 'border border-secondary' ?>" id="alamat" name="alamat" autocomplete="off" rows="3" placeholder="Alamat"><?= set_value('alamat');  ?></textarea>
                                    <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control  <?= (form_error('password1')) ? 'border border-danger' : 'border border-secondary' ?>" id="password1" placeholder="Password" name="password1" autocomplete="off">
                                        <?= form_error('password1', '<small class="form-text text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control  <?= (form_error('kabupaten')) ? 'border border-danger' : 'border border-secondary' ?>" id="password2" placeholder="Konfirmasi Password" name="password2" autocomplete="off">
                                        <?= form_error('password2', '<small class="form-text text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-user btn-block">
                                    Submit
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p class="small text-dark">Sudah Punya Akun? Silahkan <a href="<?= base_url('auth/login') ?>" class="text-decoration-none text-info"><strong> LOGIN</strong></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

            </div>
        </div>



        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
</body>

</html>