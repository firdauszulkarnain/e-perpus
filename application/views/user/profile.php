<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">

    <div class="row d-flexk justify-content-center">
        <div class="col-lg-10">
            <div class="card px-3">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <img src="<?= base_url() ?>assets/img/profile/default.png" class="img-thumbnail mt-3">
                            </div>
                            <div class="col-lg-8">
                                <input type="hidden" name="id_anggota" value="<?= $user['id_anggota'] ?>">
                                <div class="form row">
                                    <div class="form-group col-md-6">
                                        <label for="kode_anggota">Kode Anggota</label>
                                        <input type="text" class="form-control" id="kode_anggota" name="kode_anggota" value="<?= $user['kode_anggota'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tgl_daftar">Tanggal Daftar</label>
                                        <input type="text" class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?= $user['tanggal_daftar'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap Anggota</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_lengkap'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="notelp">Nomor Telpon Anggota</label>
                                    <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $user['notelp'] ?>">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success float-right mt-4 px-4" type="submit">Simpan Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>