<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-lg-5">
                            <img src="<?= base_url() ?>assets/img/buku/buku1.png" alt="" width="80%" class="tengah mt-4">
                        </div>
                        <div class="col-lg-7">
                            <div class="form row">
                                <div class="form-group col-md-6">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?= $buku['kode_buku'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tgl_terbit">Tanggal Terbit</label>
                                    <input type="text" class="form-control" id="tgl_terbit" name="tgl_terbit" value="<?= $buku['tahun_terbit'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul_buku">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku['judul_buku'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori Buku</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $buku['nama_kategori'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang'] ?>" readonly>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>