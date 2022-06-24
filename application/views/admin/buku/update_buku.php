<section class="content-header">
    <div class="container-fluid">
    </div>
</section>

<section class="content">
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card pb-3 mb-5">
                <div class="card-header bg-info font-weight-bolder text-uppercase">
                    <?= $title ?>
                </div>
                <div class="card-body px-4">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input type="text" class="form-control text-capitalize <?= (form_error('kode_buku')) ? 'is-invalid' : '' ?>" id="kode_buku" name="kode_buku" value="<?= $buku['kode_buku'] ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="kategori">Kategori Buku</label>
                                    <select class="form-control text-capitalize selectpicker <?= (form_error('kategori')) ? 'border border-danger' : 'border border-secondary' ?>" id="kategori" name="kategori" data-size="4" data-live-search="true" title="Pilih Kategori">
                                        <?php foreach ($kategori as $kt) : ?>
                                            <?php if ($buku['id_kategori'] == $kt['id_kategori']) : ?>
                                                <option value="<?= $kt['id_kategori'] ?>" selected class="text-capitalize"><?= $kt['nama_kategori'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $kt['id_kategori'] ?>" <?= set_select('kategori', $kt['id_kategori'], $kt['nama_kategori']) ?> class="text-capitalize"><?= $kt['nama_kategori'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('kategori', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" class="form-control text-capitalize <?= (form_error('judul_buku')) ? 'is-invalid' : '' ?>" id="judul_buku" name="judul_buku" value="<?= $buku['judul_buku'] ?>" autocomplete="off">
                            <?= form_error('judul_buku', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>




                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control text-capitalize <?= (form_error('pengarang')) ? 'is-invalid' : '' ?>" id="pengarang" name="pengarang" value="<?= $buku['pengarang'] ?>" autocomplete="off">
                                    <?= form_error('pengarang', '<small class="form-text text-danger">', '</small>'); ?>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="text" class="form-control text-capitalize <?= (form_error('tahun_terbit')) ? 'is-invalid' : '' ?>" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" autocomplete="off">
                                        <?= form_error('tahun_terbit', '<small class="form-text text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?= base_url() ?>buku" class="btn btn-danger brn-sm px-4 mt-3"><i class="fas fa-undo-alt"></i> Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success mt-3 px-3 float-right">Simpan Data Buku</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>