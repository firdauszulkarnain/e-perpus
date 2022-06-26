<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        </div>
    </div>
</section>

<section class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header bg-info font-weight-bolder">
                    DETAIL INFORMASI ANGGOTA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?= base_url() ?>assets/img/profile/default.png" class="img-thumbnail mt-3 tengah" width="90%">
                        </div>
                        <div class="col-lg-7">
                            <div class="form row">
                                <div class="form-group col-md-6">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input type="text" class="form-control" id="kode_anggota" name="kode_anggota" value="<?= $anggota['kode_anggota'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tgl_daftar">Tanggal Daftar</label>
                                    <input type="text" class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?= $anggota['tanggal_daftar'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap Anggota</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $anggota['nama_lengkap'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Anggota</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $anggota['email'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="notelp">Nomor Telpon Anggota</label>
                                <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $anggota['notelp'] ?>" readonly>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>