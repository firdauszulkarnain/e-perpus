<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_transaksi">Nomor Transasi</label>
                        <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="<?= $peminjaman['nomor_transaksi'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="buku">Buku Pinjam</label>
                                <input type="text" class="form-control" id="buku" name="buku" value="<?= $peminjaman['judul_buku'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-3">
                            <!-- Button Detail -->
                            <button type="button" class="btn mt-3 btn-success text-light btn-block" data-toggle="modal" data-target="#detail_buku">
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="anggota_peminjam">Anggota Peminjam</label>
                                <input type="text" class="form-control" id="anggota_peminjam" value="<?= $peminjaman['nama_lengkap'] ?>" name="anggota_peminjam" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-3">
                            <!-- Button Detail -->
                            <button type="button" class="btn mt-3 btn-success text-light btn-block" data-toggle="modal" data-target="#detail_anggota">
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card py-3">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                            <input type="text" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $peminjaman['tanggal_pinjam'] ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenggat">Tenggat Penggembalian</label>
                            <input type="text" class="form-control" id="tenggat" name="tenggat" value="<?= $peminjaman['tanggal_kembali'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 px-3 mt-3">
                            <h5 class="font-weight-bolder">TOTAL BAYAR</h5>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control font-weight-bolder" id="exampleFormControlTextarea1" rows="1" readonly style="text-align: right !important; font-size: 28px;">Rp. <?= number_format($peminjaman['total'], 0, ',', '.'); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>