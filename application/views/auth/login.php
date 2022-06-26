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

    <!-- Toaster Notif -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet">
</head>

<body style="background-image: url(../assets/img/bg/bg1.jpg); background-size: cover;">
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="login-box mt-5" style="opacity: 0.95 !important;">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                <div class="card">
                    <div class="pt-5 pb-3 px-4">
                        <div class=" card-body p-0">
                            <div class="text-center">
                                <h1 class="h4 text-info font-weight-bolder mt-1"> LOGIN EDELWIS BOOK</h1>
                                <hr class="mb-4 garis">
                            </div>
                            <div class="error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
                            <form method="POST" action="<?= base_url('auth/login') ?>">
                                <div class="mb-3">
                                    <div class="input-group <?= (form_error('username')) ? 'is-invalid' : '' ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <span class="fas fa-fw fa-user"></span></span>
                                        </div>
                                        <input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" placeholder="Username" value="<?= set_value('username') ?>" name="username" autocomplete="off" autofocus>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= form_error('username') ?>
                                    </div>
                                </div>


                                <div class="mb-4">
                                    <div class="input-group <?= (form_error('password')) ? 'is-invalid' : '' ?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <span class="fas fa-fw fa-lock"></span></span>
                                        </div>
                                        <input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : '' ?>" placeholder="Password" name="password" autocomplete="off">

                                    </div>
                                    <div class="invalid-feedback">
                                        <?= form_error('password') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-block mt-4">Masuk</button>
                                <hr>
                                <div class="text-center mt-4">
                                    <p class="small">Belum Punya Akun? Silahkan <a href="<?= base_url('auth/register') ?>" class="text-decoration-none text-info"><strong> REGISTRASI</strong></a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/js/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            const flashData = $('.flash-data').data('flashdata');
            if (flashData) {
                toastr.success(flashData);
            }
            const error = $('.error').data('error');
            if (error) {
                toastr.error(error);
            }
        });
    </script>
</body>

</html>