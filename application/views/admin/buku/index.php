<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <a class="btn btn-sm btn-success px-4 py-2" href="<?= base_url() ?>buku/tambah_buku"><i class="fas fa-fw fa-plus"></i> Tambah Buku</a>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="card-body">
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="mytabel" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Anggota</th>
                                <th>Tanggal Daftar</th>
                                <th>Stok Buku</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($buku as $row) : ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td class="text-capitalize"><?= $row['judul_buku'] ?></td>
                                    <td class="text-capitalize"><?= $row['nama_kategori'] ?></td>
                                    <td class="text-capitalize"><?= $row['pengarang'] ?></td>
                                    <td><?= $row['stock'] ?> pcs</td>
                                    <td>

                                        <!-- Button Tambah Stock -->
                                        <a href="javascript:;" data-id_buku="<?= $row['id_buku']; ?>" data-toggle="modal" data-target="#tambahStock">
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </a>
                                        <!-- Button Detail -->
                                        <a href="<?= base_url() ?>buku/detail/<?= $row['id_buku'] ?>" class="btn btn-sm btn-success text-light"><i class="fas fa-fw fa-eye"></i> </a>
                                        <!-- Button Edit -->
                                        <a href="<?= base_url() ?>buku/update_buku/<?= $row['id_buku'] ?>" class="btn btn-sm btn-info text-light"><i class="fas fa-fw fa-edit"></i></a>
                                        <!-- Button Hapus -->
                                        <form action="<?= base_url() ?>buku/hapus_buku" method="POST" class="d-inline">
                                            <input type="hidden" name="id_buku" value="<?= $row['id_buku'] ?>">
                                            <button class="btn btn-sm btn-danger text-light tombol-hapus" type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL TAMBAH STOCK -->
<div class="modal fade mt-5" id="tambahStock" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Stock Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>buku/tambah_stock" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="id_buku" name="id_buku">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" autocomplete="off" placeholder="Masukan stock Buku..." min="1" required oninvalid="this.setCustomValidity('Minimal Tambah 1 Stock!')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah Stock</button>
                </div>
            </form>
        </div>
    </div>
</div>