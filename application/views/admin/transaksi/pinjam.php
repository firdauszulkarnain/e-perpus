<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content pb-5">

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header bg-info font-weight-bolder">
                    Anggota Perpus
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="anggota">Anggota Perpus</label>
                        <select class="form-control text-capitalize selectpicker <?= (form_error('anggota')) ? 'border border-danger' : 'border border-secondary' ?>" id="anggota" name="anggota" data-size="4" data-live-search="true" title="Cari Anggota...">
                            <?php foreach ($anggota as $row) : ?>
                                <option value="<?= $row['id_anggota'] ?>" <?= set_select('anggota', $row['id_anggota'], $row['nama_anggota']) ?> class="text-capitalize"><?= $row['nama_anggota'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('anggota', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Anggota</label>
                        <input type="text" class="form-control" id="email" name="email" readonly>
                    </div>
                    <div class="form-group">
                        <label for="notelp_angggota">No. Telp Anggota</label>
                        <input type="text" class="form-control" id="notelp_angggota" name="notelp_angggota" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header bg-info font-weight-bolder">
                    Buku Perpus
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="buku">Buku Perpus</label>
                        <select class="form-control text-capitalize selectpicker <?= (form_error('buku')) ? 'border border-danger' : 'border border-secondary' ?>" id="buku" name="buku" data-size="4" data-live-search="true" title="Cari Buku...">
                            <?php foreach ($buku as $row) : ?>
                                <option value="<?= $row['id_buku'] ?>" <?= set_select('buku', $row['id_buku'], $row['judul_buku']) ?> class="text-capitalize"><?= $row['judul_buku'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('buku', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="Kategori">Kategori Buku</label>
                        <input type="text" class="form-control" id="Kategori" name="Kategori" readonly>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tahun_terbit">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" readonly>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info font-weight-bolder">
                    Transaksi Pinjaman
                </div>
                <div class="card-body px-4">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tgl_pinjam">Tanggal Pinjam</label>
                                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tgl_kembali">Tanggal Kembali</label>
                                    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="total">Total Bayar</label>
                                <input type="text" class="form-control" id="total" name="total" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2 mt-4">
                            <button class="btn btn-info btn-block mt-1">Proses Transaksi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>